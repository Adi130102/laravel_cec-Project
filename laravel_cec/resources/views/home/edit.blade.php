<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add book</title>
</head>
<body>
<form action="{{route('home.update', ['id' => $books->id])}}" method="POST">
    @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{$books->book_name}}">
            <br>
            <label for="auther">Auther name</label>
            <input type="text" name="auther" id="auther" value="{{$books->author_name}}">
            <br>
            <label for="price">Price</label>
            <input type="text" maxlength="4" pattern="\d{1,4}" name="price" id="price" value="{{$books->price}}">
            <br>
            <label for="category">category</label>
                      
            <input type="radio" id="Horror" name="category" value="Horror" {{ $books->category == "Horror" ? "checked" : "" }}>
            <label for="Horror">Horror</label><br>
    
            <input type="radio" id="Science Fiction & Fantasy" name="category" value="Science Fiction & Fantasy" {{ $books->category == "Science Fiction & Fantasy" ? "checked" : "" }}>
            <label for="Science Fiction & Fantasy">Science Fiction & Fantasy </label><br>
    
            <input type="radio" id="Novels" name="category" value="Novels" {{ $books->category == "Novels" ? "checked" : "" }}>
            <label for="Novels"> Novels</label><br>

            <input type="submit" value="add">
          </form>
</body>
</html>