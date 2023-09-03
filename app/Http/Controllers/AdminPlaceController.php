<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class AdminPlaceController extends Controller
{
    public function index()
{
    $places = Place::orderBy('Name', 'desc')->paginate(10);
    return view('admin.places.index', compact('places'));
}


    public function create()
    {
        return view('admin.places.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // Add validation rules for other fields
        ]);

        Place::create($validatedData);

        return redirect()->route('admin.places.index')->with('success', 'Place created successfully');
    }

    public function show($id)
    {
        $place = Place::findOrFail($id);
        return view('admin.places.show', compact('place'));
    }

    public function edit($id)
    {
        $place = Place::findOrFail($id);
        return view('admin.places.edit', compact('place'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // Add validation rules for other fields
        ]);

        $place = Place::findOrFail($id);
        $place->update($validatedData);

        return redirect()->route('admin.places.index')->with('success', 'Place updated successfully');
    }

    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();

        return redirect()->route('admin.places.index')->with('success', 'Place deleted successfully');
    }
}