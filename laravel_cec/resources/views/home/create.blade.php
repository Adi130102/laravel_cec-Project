<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add book</title>
</head>
<body>
<form action="{{route('home.store')}}" method="POST">
    @csrf
            <input type="text" id="id" name="id" style="display: none;">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="auther">Auther name</label>
            <input type="text" name="auther" id="auther" required>
            <br>
            <label for="price">Price</label>
            <input type="text" maxlength="4" pattern="\d{1,4}" name="price" id="price" required>
            <br>
            <label for="category">category</label>
                      
            <input type="radio" id="Horror" name="category" value="Horror">
            <label for="Horror">Horror</label><br>
    
            <input type="radio" id="Science Fiction & Fantasy" name="category" value="Science Fiction & Fantasy">
            <label for="Science Fiction & Fantasy">Science Fiction & Fantasy </label><br>
    
            <input type="radio" id="Novels" name="category" value="Novels">
            <label for="Novels"> Novels</label><br>

            <input type="submit" value="add">
          </form>
</body>
</html>