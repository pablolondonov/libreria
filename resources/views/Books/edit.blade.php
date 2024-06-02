<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Libro</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required >
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Publisher</label>
    <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}" required>
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Published Date</label>
    <input type="date" class="form-control" id="published_date" name="published_date" value="{{ $book->published_date }}">
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}" >
  </div>
  <div class="mb-3" style="width: 400px;">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description" value= "{{ $book->description }}">
  </div>

  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
