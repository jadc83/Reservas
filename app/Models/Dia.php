<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    /** @use HasFactory<\Database\Factories\DiaFactory> */
    use HasFactory;

    protected $fillable = ['nombre'];

    public function tramos()
    {
        return $this->hasMany(Tramo::class);
    }
}
