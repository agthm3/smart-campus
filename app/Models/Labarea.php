<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mac'
    ];

    public function logattendance(){
        return $this->hasMany(LogAttendance::class);
    }
}
