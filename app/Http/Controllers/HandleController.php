<?php

namespace App\Http\Controllers;

use App\Models\Handle;
use App\Models\Labarea;
use App\Models\LogAttendance;
use App\Models\RekapParkir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HandleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function handleAction(Request $request)
    {
        // Menerima request dari IoT
        $mac = $request->input('mac');
        $rfid = $request->input('rfid');
        $code_info = $request->input('code_info');
        $areaparkir_id = $request->input('areaparkir_id');
        
        // Mencari user berdasarkan RFID
        $user = User::where('rfid', $rfid)->first();
        
        // Jika user tidak ditemukan, kembali dengan pesan error
        if (!$user) {
            return response()->json(['message' => 1], 404);
        }
        
        // Simpan ke tabel rekap_parkirs
        $parkingStatus = $code_info == 1 ? 'is_in' : 'is_out';
        RekapParkir::create([
            'user_id' => $user->id,
            'areaparkir_id' => $areaparkir_id,
            // 'areaparkir_id' => $mac,
            'parking_status' => $parkingStatus,
        ]);
        
        // Mengirim perintah ke endpoint api/commands untuk membuka palang parkir
        if ($code_info == 1) {
            Http::post('http://127.0.0.1:8000/api/commands', [
                'mac' => $mac,
                'command' => 'open'
            ]);
        }
        
        return response()->json(['message' => 0]);
    }

    public function handleAttendance(Request $request)
    {
        // Menerima request dari sensor pembaca
        $rfid = $request->input('rfid');
        $labarea_id = $request->input('labarea_id');
        
        // Mencari user berdasarkan RFID
        $user = User::where('rfid', $rfid)->first();
        $labarea = Labarea::where('id')->first();
        
        // Jika user tidak ditemukan, kembali dengan pesan error
        if (!$user || !LabArea::find($labarea_id)) {
            return response()->json(1);
        }
        
        // Simpan ke tabel log_attendances
        LogAttendance::create([
            'user_id' => $user->id,
            'labarea_id' => $labarea_id,
        ]);
        
        // Mengirim pesan untuk membuka
        return response()->json(['message' => 'open']);
    }

    public function index()
    {
        //
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
    public function show(Handle $handle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Handle $handle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Handle $handle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Handle $handle)
    {
        //
    }
}
