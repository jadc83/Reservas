<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Models\Dia;
use App\Models\Reserva;
use App\Models\Tramo;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservaRequest $request)
    {
        // Verifica si los modelos $dia y $tramo están llegando correctamente

        // Crea una nueva reserva
        $reserva = new Reserva();
        $reserva->user_id = Auth::id();
        $reserva->tramo_id = $request->tramo_id;
        $reserva->dia_id = $request->dia_id;

        // Guarda la reserva
        $reserva->save();

        return redirect()->route('dias.index')->with('success', 'Reserva realizada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
