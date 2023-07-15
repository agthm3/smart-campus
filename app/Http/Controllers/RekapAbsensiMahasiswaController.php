<?php

namespace App\Http\Controllers;

use App\Models\Labarea;
use App\Models\LogAttendance;
use App\Models\RekapAbsensiMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RekapAbsensiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = LogAttendance::all();

        return view('pages.rekapabsensi.index', compact('logs'));
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
        $user_id = Auth::id();
        $labarea_id = $request->labarea_id;
        

        LogAttendance::create([
            'user_id' => $user_id,
            'labarea_id' => $labarea_id,
        ]);

        return Redirect::route('rekapabsensi.index');
        // @dd($labarea_id);
        // $jobexperiences = JobExperience::where('user_id', $user_id)->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(RekapAbsensiMahasiswa $rekapAbsensiMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RekapAbsensiMahasiswa $rekapAbsensiMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RekapAbsensiMahasiswa $rekapAbsensiMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RekapAbsensiMahasiswa $rekapAbsensiMahasiswa)
    {
        //
    }
}
