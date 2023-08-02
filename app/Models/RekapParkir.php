<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapParkir extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'areaparkir_id',
        'parking_status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function areaparkir(){
        return $this->belongsTo(Areaparkir::class);
    }
}
