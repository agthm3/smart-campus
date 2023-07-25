<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\OpenBarier;
use App\Models\RekapParkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;


class OpenBarierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
   
    //     $parkingstatus = RekapParkir::where('parking_status', '=', 'is_in')->latest()->first();
    //     if($parkingstatus){
    //        $parkingMasuk = $parkingstatus;
    //        $parkingAreas = null;
    //     }else{
    //         $parkingAreas = AreaParkir::all();
    //         $parkingMasuk = null;
    //     }
    //     return view('pages.openbarier.index', compact('parkingAreas', 'parkingMasuk' ));
    // }
    public function index()
    {
        $user_id = Auth::id();

        // Cari apakah ada record parkir terakhir dengan parking_status = 'is_in' untuk user ini
        $latestParkingIn = RekapParkir::where('user_id', $user_id)
            ->where('parking_status', 'is_in')
            ->latest()
            ->first();

        // Cari apakah ada record parkir terakhir dengan parking_status = 'is_out' untuk user ini
        $latestParkingOut = RekapParkir::where('user_id', $user_id)
            ->where('parking_status', 'is_out')
            ->latest()
            ->first();

        if ($latestParkingIn && (!$latestParkingOut || $latestParkingIn->created_at > $latestParkingOut->created_at)) {
            // Jika ada record parkir dengan parking_status = 'is_in' yang lebih baru dari record parkir dengan parking_status = 'is_out', maka user masih berada di dalam parkir
            $parkingMasuk = $latestParkingIn;
            $parkingAreas = null;
        } else {
            // Jika tidak, maka user sudah keluar dari parkir
            $parkingAreas = AreaParkir::all();
            $parkingMasuk = null;
        }

        return view('pages.openbarier.index', compact('parkingAreas', 'parkingMasuk'));
    }

    public function keluar(Request $request)
    {
        // dd($request);
        echo "Fungsi Keluar Terpanggil";
        $user_id =Auth::id();
        $request->validate([
            'areaparkir_id' => 'required|max:255|numeric'
        ]);

        RekapParkir::create([
            'parking_status' =>'is_out',
            'user_id' => $user_id, 
            'areaparkir_id' => $request->areaparkir_id
        ]); 

        return Redirect::route('openbarier.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.openbarier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function masuk(Request $request)
    {
        $user_id =Auth::id();
        $request->validate([
            'areaparkir_id' => 'required|max:255|numeric'
        ]);

        RekapParkir::create([
            'parking_status' => 'is_in',
            'user_id' => $user_id, 
            'areaparkir_id' => $request->areaparkir_id
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(OpenBarier $openBarier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OpenBarier $openBarier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpenBarier $openBarier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpenBarier $openBarier)
    {
        $openBarier->delete();

        return Redirect::back();
    }
}
