@extends('main')

@section('content')
<div class="container mt-3 mb-3">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        Name:<br>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" /><br>
        
        Price ($):<br>
        <input type="text" name="price" value="{{ $product->price }}" class="form-control" /><br>

        Category:<br>
        <select name="category_id" value="" class="form-control" >
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach    
        </select><br>

        Photo:<br>
        <input type="file" name="photo" /><br><br>
        <input type="submit" class="btn btn-primary" value="Update" /><br><br>
    </form>
</div>
@endsection