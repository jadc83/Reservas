<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tramos', function (Blueprint $table) {
            $table->id();
            $table->time('horario');
            $table->foreignId('dia_id')->constrained();
            $table->timestamps();
        });

        Artisan::call('db:seed', ['--class' => 'TramosSeeder']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramos');
    }
};
