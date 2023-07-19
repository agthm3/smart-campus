<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areaparkir extends Model
{
    use HasFactory;
        protected $fillable = [
        'name', 
        'max_motor', 
        'max_car'
    ];

    public function logparking(){
        return $this->hasMany(RekapParkir::class);
    }
}
