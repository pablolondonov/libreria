@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Books</h2>
        <a class="btn btn-success mb-2" href="{{ route('books.create') }}"> Add New Book</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->description }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection