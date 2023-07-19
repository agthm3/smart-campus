<?php

namespace App\Http\Controllers;

use App\Models\RekapParkir;
use Illuminate\Http\Request;

class RekapParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logParkings = RekapParkir::all();
        return view('pages.rekapparkir.index', compact('logParkings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(RekapParkir $rekapParkir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RekapParkir $rekapParkir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RekapParkir $rekapParkir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RekapParkir $rekapParkir)
    {
        //
    }
}
