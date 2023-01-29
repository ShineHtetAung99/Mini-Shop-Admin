@extends('main')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md">
        <div class="card card-body">
            <h2>Categories</h2>
            @if (session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('successMsg') }}
            </div>
            @endif
        </div>
        <div class="card card-body">
            <table class="table">
                <a class="btn btn-primary" href="{{ route('categories.create') }}">Create Category</a>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="btn btn-raised btn-success btn-sm" href="{{ route('categories.edit', $category->id )}}">Edit</i></a>
                            {{-- <a><form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="dispalay: inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure wnat to delete?')" />
                                </form></a> --}}
                                <form method="POST" id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id)}}" 
                                    style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                                <button onclick="if (confirm('Are you sure delete this data?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $category->id }}').submit();
                                }else{
                                    event.preventDefault();
                                }" class="btn btn-raised btn-danger btn-sm" href="{{ route('categories.edit', $category->id)}}">Delete
                                </button>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection