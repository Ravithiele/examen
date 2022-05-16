<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function kamer()
    {
        return $this->hasMany(Kamer::class, 'hotel_id');
    }
    public function reservering()
    {
        return $this->hasMany(Reservering::class, 'hotel_id');
    }
}
