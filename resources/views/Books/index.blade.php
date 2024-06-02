<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>libreria</title>

    <!-- Incluye las bibliotecas de DataTables -->
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <h1>INDEX</h1>

    <!-- Botón para ir a la vista de creación -->
    <a href="{{ route('books.create') }}">Crear Nuevo Libro</a>

    <!-- Tabla para mostrar los libros -->
    <table id="books-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Published Date</th>
                <th>Genre</th>
                <th>Description</th>
                <th>Acciones</th> <!-- Agrega una columna para las acciones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->published_date }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <!-- Botón para ir a la vista de edición -->
                        <a href="{{ route('books.edit', $book->id) }}">Editar</a>
                        
                        <!-- Formulario para eliminar el libro -->
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Script para inicializar DataTables -->
    <script>
        $(document).ready(function() {
            $('#books-table').DataTable();
        });
    </script>
</body>
</html>

