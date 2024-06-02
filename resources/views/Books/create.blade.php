<!-- resources/views/books/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Book</title>
    <!-- Agrega aquí tus enlaces CSS si los necesitas -->
</head>
<body>
    <h1>Create a New Book</h1>

    <form  action="{{ route('books.store') }}" method="POST">
    @csrf
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" required>
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Publisher</label>
    <input type="text" class="form-control" id="publisher" name="publisher" required>
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Published Date</label>
    <input type="date" class="form-control" id="published_date" name="published_date">
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre" >
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description" >
  </div>

  <button type="submit" class="btn btn-primary">Create Book</button>
</form>

    <!-- <form action="{{ route('books.store') }}" method="POST">
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
    </form> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
