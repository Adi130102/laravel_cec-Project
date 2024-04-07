<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\login;
use App\Models\book;


class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Session::has('email')) {
            return redirect()->route('login.index');
        }
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Session::has('email')) {
            return redirect()->route('login.index');
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'auther' => 'required',
            'price' => 'required|min:3',
            'category'=>'required',
        ]);

        $book = new Book();
        $book->book_name = $validatedData['name'];
        $book->author_name = $validatedData['auther'];
        $book->price = $validatedData['price'];
        $book->category = $validatedData['category'];

        $book->save();
        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Session::has('email')) {
            return redirect()->route('login.index');
        }
        $books=book::find($id);
        return view('home.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Session::has('email')) {
            return redirect()->route('login.index');
        }
        $validatedData = $request->validate([
            'name' => 'required',
            'auther' => 'required',
            'price' => 'required|min:3',
            'category'=>'required',
        ]);
    
        $book = Book::findOrFail($id);
    
        $book->book_name =$request->name;
        $book->author_name = $request->auther;
        $book->price = $request->price;
        $book->category = $request->category;
       
        $book->save();
    
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Session::has('email')) {
            return redirect()->route('login.index');
        }
        book::where('id',$id)->delete();
        return redirect()->route('home.index');
    }
}
