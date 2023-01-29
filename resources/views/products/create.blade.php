@extends('main')

@section('content')
<div class="container mt-3 mb-3">
    <h2>New Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        Name:<br>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" /><br>
        
        Price ($):<br>
        <input type="text" name="price" value="{{ old('price') }}" class="form-control" /><br>

        Category:<br>
        <select name="category_id" value="" class="form-control" >
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"@if ($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
            @endforeach    
        </select><br>

        Photo:<br>
        <input type="file" name="photo"  /><br><br>
        <input type="submit" class="btn btn-primary" value="Save" /><br><br>
    </form>
</div>
@endsection