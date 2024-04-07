<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\book;


class loginController extends Controller
{
    public function loginpage(Request $request){

        return view('login.index');
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = login::where('email',$email)->where('password', $password)->get();

        if(count($user) != 0){
            $request->session()->put('email',$email);
            return redirect()->route('home.index');
        }else{
            return redirect()->back();
        }

    }

    public function home(Request $request){
        if(!$request->session()->exists('email'))
        {
            return redirect()->route('login.index');
        }
        $books = book::all();
        return view('home.index',compact('books'));
    }

    public function logout(Request $request){
        
        $request->session()->flush();
        return redirect()->route('login.index');
      }
}
