@extends('main')

@section('content')

<h2>Category Edit</h2>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @method('PUT')
    @csrf
    Name:<br>
    <input type="text" name="name" value="{{ $category->name }}" class="form-control" /><br>
    <input type="submit" class="btn btn-primary" value="Update" /><br><br>
</form>

@endsection