<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>libreria</title>
</head>
<body>
    <form action="{{ url('/')}}" method="post">
        @csrf

         <input type="text" name="name" id="name">

         <input type="submit" value="agregar libro">

    </form>
    
</body>
</html>