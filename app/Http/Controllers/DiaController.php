<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiaRequest;
use App\Http\Requests\UpdateDiaRequest;
use App\Models\Dia;
use App\Models\Tramo;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dias = Dia::with('tramos')->get();

        return view('dias.index', ['dias' => $dias]);
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
    public function store(StoreDiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dia $dia, Request $request)
    {
        $tramo = Tramo::find($request->tramo_id);
        return view('dias.show', ['dia' => $dia, 'tramo' => $tramo ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dia $dia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiaRequest $request, Dia $dia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dia $dia)
    {
        //
    }
}
