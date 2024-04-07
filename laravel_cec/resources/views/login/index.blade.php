<html>
    <head>
        <title>Log in</title>
<style>
body {
  background-color:rgba(244, 91, 105, 1);
  font-family:sans-serif;
;
}
h1{
    margin-top: -2%;
    margin-bottom: 5%;
    font-size: large;
    color: rgb(32, 27, 27);
    text-align: center;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.login {
  overflow: hidden;
  background-color: white;
  padding: 40px 30px 30px 30px;
  border-radius: 10px;
  position: absolute;
  top: 20%;
  left: 35%;
  width: 400px;
  text-align: center;
  
  > input {
    font-family:sans-serif;
    display: block;
    border-radius: 5px;
    font-size: 16px;
    background: white;
    width: 100%;
    border: 0;
    padding: 10px 10px;
    margin: 15px -10px;
  }
  
  > .btn_submit {
    text-align: center;
    font-family:sans-serif;
    cursor: pointer;
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    width: 80px;
    border: 0;
    padding: 10px 0;
    margin-top: 10px;
    margin-left: 40%;
    border-radius: 5px;
    background-color: rgba(244, 91, 105, 1);
    
    &:hover {
      background-color: #c71b46;
    }
  }
  .alert.alert-danger {
    /* Your custom styling for error message */
    background-color: #f8d7da; /* Light red background */
    color: #721c24; /* Dark red text */
    border-color: #f5c6cb; /* Red border */
    padding: 10px; /* Padding around the message */
    margin-bottom: 20px; /* Bottom margin to separate from other content */
}
}
</style>
</head>
    <body>
       <form class="login"  method="POST" action="{{route('login.check')}}">
        @csrf
            <h1>Login</h1>
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" class="btn_submit" value="Log in">

            @if ($errors->any())
           <div class="alert alert-danger">
             <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
            </ul>
            </div>
            @endif
        </form>

    </body>
</html>