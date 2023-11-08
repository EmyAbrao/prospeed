<?php

namespace App\Http\Controllers;

use App\Models\SessionType;
use Illuminate\Http\Request;

class SessionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index para api
        $tipoSessoes = SessionType::all();
        return response()->json(['TipoSessoes'=>$tipoSessoes, 'mensage' => 'Tipos de sessões encontrados com sucesso!'], 200);
    }
    public function listaTipoSessoes()
    {
        $tipoSessoes = SessionType::all();
        $tableName6 = 'Lista de Tipo de Sessões';
        return view('tipoSessoes.lista')
            ->with('tipoSessoes', $tipoSessoes)
            ->with('tableName', $tableName6);
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
     * @param  \App\Models\SessionType  $sessionType
     * @return \Illuminate\Http\Response
     */
    public function show(SessionType $sessionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SessionType  $sessionType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SessionType $sessionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SessionType  $sessionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SessionType $sessionType)
    {
        //
    }
}
