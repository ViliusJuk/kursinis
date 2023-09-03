<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return response()->json($places);
    }

    public function store(Request $request)
    {
        // Logic to store a new place
    }

    public function show($id)
    {
        $place = Place::find($id);
        if (!$place) {
            return response()->json(['message' => 'Place not found'], 404);
        }
        return response()->json($place);
    }

    public function update(Request $request, $id)
    {
        // Logic to update a place
    }

    public function destroy($id)
    {
        // Logic to delete a place
    }
}
