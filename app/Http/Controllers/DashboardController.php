<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\LogAttendance;
use App\Models\RekapParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $logAbsensi = LogAttendance::all()->last()->take(2);
        $logAbsensi = LogAttendance::latest()->take(5)->get()->reverse();
        $logParking = RekapParkir::latest()->take(5)->get()->reverse();
        return view('pages.dashboard.index', compact('logAbsensi', 'logParking'));
    }

    public function notconfirm(){
        return view('pages.dashboard.notconfirm');
    }

    public function noaccess(){
        return view('pages.dashboard.noaccess');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
