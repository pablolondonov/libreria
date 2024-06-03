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
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <h1>BOOKS LIST</h1>
    <br>
    <button type="button" class="btn btn-success" id="successButton"><i class="bi bi-book"></i> Create a New Book</button>
    <br>
    <br>
    <!-- Tabla para mostrar los libros -->
    <div style="border: 2px solid black; padding: 10px;">
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
                    @if(isset($book))
                        <button type="button" class="btn btn-warning" id="editButton"><i class="bi bi-pencil"></i> Editar</button>
                    <form id="deleteForm" action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button id="deleteButton" type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</button>
                    </form>
                    <script>
                        var bookId = @json($book->id);

                        document.getElementById('editButton').addEventListener('click', function() {
                        window.location.href = "{{ route('books.edit', ':id') }}".replace(':id', bookId);
                        });
                    </script>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- Script para inicializar DataTables -->
    <script>

        $(document).ready(function() {
            $('#books-table').DataTable();
        });

        document.getElementById('successButton').addEventListener('click', function() {
            window.location.href = "{{ route('books.create') }}";
        });

        var deleteButton = document.getElementById('deleteButton');
        var deleteForm = document.getElementById('deleteForm');
            deleteButton.addEventListener('click', function() {
            deleteForm.submit();
    });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

