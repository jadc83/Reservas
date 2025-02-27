<?php

use App\Models\Dia;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->timestamps();
        });

        Dia::create(['nombre' => 'Lunes']);
        Dia::create(['nombre' => 'Martes']);
        Dia::create(['nombre' => 'Miercoles']);
        Dia::create(['nombre' => 'Jueves']);
        Dia::create(['nombre' => 'Viernes']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias');
    }
};
