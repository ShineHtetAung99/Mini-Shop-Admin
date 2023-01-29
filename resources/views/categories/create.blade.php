@extends('main')

@section('content')
<div class="container mt-3 mb-3">
    <h2>New Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        Name:<br>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" /><br>
        <input type="submit" class="btn btn-primary" value="Save" /><br><br>
    </form>
</div>
@endsection