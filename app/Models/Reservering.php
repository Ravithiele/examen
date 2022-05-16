<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reservering()
    {
        return $this->belongsTo(Reservering::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
