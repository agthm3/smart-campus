<?php

namespace App\Http\Controllers;

use App\Models\Labarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LabareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string'
        ]);

        Labarea::create([
            'name' => $request->name 
        ]);

        return Redirect::route('absensi.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Labarea $labarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Labarea $labarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Labarea $labarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Labarea $labarea)
    {
        $labarea->delete();

        return Redirect::back();
    }
}
