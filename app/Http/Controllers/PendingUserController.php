<?php

namespace App\Http\Controllers;

use App\Models\PendingUser;
use Illuminate\Http\Request;

class PendingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.pendinguser.index');
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
    public function show(PendingUser $pendingUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendingUser $pendingUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendingUser $pendingUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendingUser $pendingUser)
    {
        //
    }
}
