<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use App\Models\User;
use Illuminate\Http\Request;

class AllUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('pages.allusers.index', compact('users'));
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
    public function show(AllUser $allUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AllUser $allUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AllUser $allUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllUser $allUser)
    {
        //
    }
}
