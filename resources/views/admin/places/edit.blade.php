@extends('layouts.admin')

@section('content')
    <h1>Edit Place</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.places.update', $place->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $place->name) }}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $place->price) }}">
        </div>

        <!-- Add form fields for other product attributes -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection