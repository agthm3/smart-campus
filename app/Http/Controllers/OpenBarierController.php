<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\OpenBarier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OpenBarierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkingAreas = AreaParkir::all();
        return view('pages.openbarier.index', compact('parkingAreas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.openbarier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OpenBarier $openBarier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OpenBarier $openBarier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpenBarier $openBarier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpenBarier $openBarier)
    {
        $openBarier->delete();

        return Redirect::back();
    }
}
