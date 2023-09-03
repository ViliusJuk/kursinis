@extends('layouts.admin')

@section('content')
    <h1>Place List</h1>

    <a href="{{ route('admin.places.create') }}" class="btn btn-primary mb-3">Add place</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Descriptions</th>
                <th>Price</th>
                <th>Image</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>city</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($places as $place)
                <tr>
                    <td>{{ $place->name }}</td>
                    <td>{{ $place->description }}</td>
                    <td>
                        <a href="{{ route('admin.places.show', $place->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.places.edit', $place->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.places.destroy', $place->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this place?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No places found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $places->links() }}
@endsection