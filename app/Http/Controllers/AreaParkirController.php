<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AreaParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkingAreas = AreaParkir::all();
        return view('pages.areaparkir.index', compact('parkingAreas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.areaparkir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255', 
            'max_motor' => 'numeric|max:255',
            'max_car' => 'numeric|max:255'
        ]);


        AreaParkir::create([
            'name' => $request->name, 
            'max_motor'=> $request->max_motor, 
            'max_car' => $request->max_car
        ]);

        return Redirect::route('areaparkir.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaParkir $areaParkir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaParkir $areaParkir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaParkir $areaParkir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaParkir $areaParkir)
    {
        $areaParkir->delete();

        return Redirect::back();
    }
}
