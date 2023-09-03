<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;


class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('admin.places.index', compact('places'));
    }

    public function create()
    {

        return view('admin.places.create');

    }

    public function store(Request $request)
    {
        $place = Place::create($request->all());
        // Handle image upload if necessary

        return redirect()->route('admin.places.index')->with('success', 'Place created successfully.');
    }

    public function show(Place $place)
    {
        return view('admin.places.show', compact('place'));
    }

    public function edit(Place $place)
    {
        return view('admin.places.edit', compact('place'));
    }

    public function update(Request $request, Place $place)
    {
        $place->update($request->all());
        // Handle image upload if necessary

        return redirect()->route('admin.places.index')->with('success', 'Place updated successfully.');
    }

    public function destroy(Place $place)
    {
        $place->delete();
        // Handle image deletion if necessary

        return redirect()->route('admin.places.index')->with('success', 'Place deleted successfully.');
    }
}
