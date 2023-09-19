<?php

namespace App\Http\Controllers;

use App\Models\CommandAttendance;
use Illuminate\Http\Request;

class CommandAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $commands = CommandAttendance::select('id', 'mac', 'status')->latest()->limit(20)->get();
        return response()->json($commands);
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
    public function show(CommandAttendance $commandAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommandAttendance $commandAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommandAttendance $commandAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommandAttendance $commandAttendance)
    {
        //
    }
}
