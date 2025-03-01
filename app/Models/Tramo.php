<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramo extends Model
{
    /** @use HasFactory<\Database\Factories\TramoFactory> */
    use HasFactory;

    public function dias()
    {
        return $this->belongsTo(Dia::class);
    }
}
