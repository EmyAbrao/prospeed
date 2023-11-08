<?php

namespace App\Http\Controllers;

use App\Models\RaceTrack;
use Illuminate\Http\Request;

class RaceTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index para
        $pistas = RaceTrack::all();
        return response()->json(['Pistas'=>$pistas, 'mensagem' => 'Pistas encontradas com sucesso!'], 200);

    }
    public function listaPistas()
    {
        $pistas = RaceTrack::all();
        $tableName2 = 'Lista de Pistas';
        return view('pistas.lista')
            ->with('pistas', $pistas)
            ->with('tableName', $tableName2);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RaceTrack  $raceTrack
     * @return \Illuminate\Http\Response
     */
    public function show(RaceTrack $raceTrack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RaceTrack  $raceTrack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaceTrack $raceTrack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RaceTrack  $raceTrack
     * @return \Illuminate\Http\Response
     */
    public function destroy(RaceTrack $raceTrack)
    {
        //
    }
}
