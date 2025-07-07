<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hotel::paginate(15);
    }

    public function store(Request $request)
    {
        $hotel = Hotel::create([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'user_id' => $request->get('user_id')
        ]);
        return response()->json($hotel, 202);
    }

    public function show(Hotel $hotel)
    {
        return $hotel;
    }

    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return response()->json($hotel, 202);
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json([],204);
    }
}
