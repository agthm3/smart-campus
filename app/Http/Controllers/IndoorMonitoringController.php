<?php

namespace App\Http\Controllers;

use App\Models\IndoorMonitoring;
use Illuminate\Http\Request;

class IndoorMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.indoormonitoring.index');
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
    public function show(IndoorMonitoring $indoorMonitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IndoorMonitoring $indoorMonitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IndoorMonitoring $indoorMonitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IndoorMonitoring $indoorMonitoring)
    {
        //
    }
}
