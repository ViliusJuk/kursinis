@extends('layouts.admin')

@section('content')
    <h1>Place Details</h1>

    <h3>Name: {{ $place->name }}</h3>
    <p>Price: {{ $place->price }}</p>
    <p>Description: {{$place->description}}</p>

    <!-- Display other place details -->

    <a href="/dashboard" class="btn btn-primary">Edit</a>

        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this place?')">Delete</button>
    </form>
@endsection