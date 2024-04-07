<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}">
    <style>

    .btn {
      border: none;
      background-color: inherit;
      padding: 1px 2px;
      font-size: 16px;
      cursor: pointer;
      display: inline-block;
    }

    .delete {
      color: red;
    }
    

    .addsub {
      background-color: rgb(78, 172, 16);
      border-radius: 5px;
      padding: 10px;
    }

    .delete:hover {
      background: #f44336;
      color: white;
    }

    .update {
      color: dodgerblue;
    }

    .update:hover {
      background: #2196F3;
      color: white;
    }
</style>
    <title>Document</title>

</head>
<body>
<div style="display: flex; align-items: center; margin-top:30px; " >
        <form action="{{route('home.create')}}" method="GET" style="margin-right: 20px;">
            <button type="submit" class="btn btn-primary"
            style="background-color:#1a3973; 
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;">Add book</button>
        </form>
        <form action="{{route('home.logout')}}" method="GET" style="margin-right: 10px;">
            <button type="submit" class="btn btn-primary"
            style="background-color: red;
             border: none;
             color: white;
             padding: 15px 32px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 16px;
             cursor: pointer;">Logout</button>
        </form>
</div>
    <div class="table-wrapper">
        <table>
          <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Author_name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Is_available</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr style="text-align: center">
                <td>{{ $book->id }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->author_name }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->is_available }}</td>
                <td>
                    <button class="btn update" onclick="window.location='{{ route('home.edit', ['id' => $book->id]) }}'"  id="btn">Edit</button>
                    <button class="btn delete" onClick="window.location='{{ route('home.delete', ['id' => $book->id]) }}'">Delete</button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</body>
</html>