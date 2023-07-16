<?php

namespace App\Http\Controllers;

use App\Models\PendingUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PendingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pending_user = User::where('status', '=' , 'pending')->orWhere('status', '=', 'reject')->get();

        return view('pages.pendinguser.index', compact('pending_user'));
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
    public function update_confirm(Request $request ,User $user){
        $user->update([
            'status' => $request->status,
        ]);

        return Redirect::route('pendinguser.index');
    }

    public function update_reject(Request $request, User $user)
    {
        $user->update([
            'status' => $request->status,
        ]);

        return Redirect::route('pendinguser.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendingUser $pendingUser)
    {
        //
    }
}
