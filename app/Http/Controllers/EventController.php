<?php

namespace App\Http\Controllers;

use App\Models\EventRace;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index para api
        $eventos = EventRace::all();
        return response()->json(['Eventos'=>$eventos, 'mensage' => 'Eventos encontrados com sucesso!'], 200);
    
    }
    public function listaEventos()
    {
        $eventos = EventRace::all();
        $tableName4 = 'Lista de Eventos';
        return view('eventos.lista')
            ->with('eventos', $eventos)
            ->with('tableName', $tableName4);
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
     * @param  \App\Models\EventRace  $event
     * @return \Illuminate\Http\Response
     */
    public function show(EventRace $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventRace  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventRace $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventRace  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = EventRace::findOrFail($id);
        $event->delete();
        $msg = 'Sucesso ao excluir o evento '. $event->name;
        return redirect ('prospeed/eventos');
        //
    }
}
