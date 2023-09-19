<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandAttendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'mac',
        'status'
    ];
}
