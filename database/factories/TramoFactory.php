<?php

namespace Database\Factories;

use App\Models\Tramo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TramoFactory extends Factory
{
    protected $model = Tramo::class;

    public function definition()
    {
        static $horarios = [];

        if (empty($horarios)) {
            for ($hora = 10; $hora < 20; $hora++) {
                $horarios[] = sprintf('%02d:00:00', $hora);
            }
        }

        return [
            'horario' => $this->faker->unique()->randomElement($horarios),
            'dia_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
