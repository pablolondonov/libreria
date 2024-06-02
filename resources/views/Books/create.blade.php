<!-- resources/views/books/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
    <!-- Agrega aquí tus enlaces CSS si los necesitas -->
</head>
<body>
    <h1>Create a New Book</h1>

    {{-- @if ($errors->any())
        <div>
            <strong>Whoops! Something went wrong!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="{{ old('author') }}" required>
        </div>

        <div>
            <label for="publisher">Publisher:</label>
            <input type="text" id="publisher" name="publisher" value="{{ old('publisher') }}">
        </div>

        <div>
            <label for="published_date">Published Date:</label>
            <input type="date" id="published_date" name="published_date" value="{{ old('published_date') }}">
        </div>

        <div>
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" value="{{ old('genre') }}">
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <button type="submit">Create Book</button>
        </div>
    </form>
</body>
</html>
