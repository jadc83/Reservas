<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tramo;

class TramoSeeder extends Seeder
{
    public function run()
    {
        foreach (range(1, 5) as $dia_id) { // Para cada día de la semana (1 a 5)
            for ($hora = 10; $hora < 20; $hora++) { // De 10:00 a 19:00
                Tramo::create([
                    'horario' => sprintf('%02d:00:00', $hora),
                    'dia_id' => $dia_id,
                ]);
            }
        }
    }
}
