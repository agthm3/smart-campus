<?php

namespace App\Http\Controllers;

use App\Models\AllUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    public function show($id)
    {
        $allUser = User::find($id);
        
        if (!$allUser) {
            return redirect()->route('allusers.index')->with('error', 'User not found');
        }

        return view('pages.allusers.show', compact('allUser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $allUser = User::find($id);

        return view('pages.allusers.edit', compact('allUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->rfid);
        $allUser = User::find($id);

        $request->validate([
            'name' => 'string|max:244',
            'rfid'=> 'string|max:244',
            'email'=> 'email'
        ]);


        $allUser->update([
            'name' => $request->name, 
            'email' => $request->email,
            'rfid' => $request->rfid,
        ]);

        return Redirect::route('allusers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $allUser = User::find($id);

        $allUser->delete();

        return Redirect::back();
    }
}
