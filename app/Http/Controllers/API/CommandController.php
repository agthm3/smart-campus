<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function index()
    {
        $commands = Command::all();
        return response()->json($commands);
    }
}
