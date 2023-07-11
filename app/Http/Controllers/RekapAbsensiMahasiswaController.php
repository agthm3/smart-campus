<?php

namespace App\Http\Controllers;

use App\Models\RekapAbsensiMahasiswa;
use Illuminate\Http\Request;

class RekapAbsensiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.rekapabsensi.index');
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
