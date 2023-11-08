<?php

namespace App\Http\Controllers;

use App\Models\SessionRace;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index para api
        $sessoes = SessionRace::all();
        return response()->json(['Sessoes'=>$sessoes, 'mensage' => 'Sessões encontradas com sucesso!'], 200);

    }
    public function listaSessoes()
    {
        $sessoes = SessionRace::all();
        $tableName5 = 'Lista de Sessões';
        return view('sessoes.lista')
            ->with('sessoes', $sessoes)
            ->with('tableName', $tableName5);
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
     * @param  \App\Models\SessionRace  $session
     * @return \Illuminate\Http\Response
     */
    public function show(SessionRace $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SessionRace $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SessionRace  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        //
    }
}
