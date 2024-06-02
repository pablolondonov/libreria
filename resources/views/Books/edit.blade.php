<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Libro</title>
</head>
<body>
    <h1>Editar Libro</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="{{ $book->name }}"><br><br>

        <label for="author">Autor:</label><br>
        <input type="text" id="author" name="author" value="{{ $book->author }}"><br><br>

        <label for="publisher">Editorial:</label><br>
        <input type="text" id="publisher" name="publisher" value="{{ $book->publisher }}"><br><br>

        <label for="published_date">Fecha de Publicación:</label><br>
        <input type="date" id="published_date" name="published_date" value="{{ $book->published_date }}"><br><br>

        <label for="genre">Género:</label><br>
        <input type="text" id="genre" name="genre" value="{{ $book->genre }}"><br><br>

        <label for="description">Descripción:</label><br>
        <textarea id="description" name="description">{{ $book->description }}</textarea><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
