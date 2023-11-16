<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;
use App\Models\User;


class PilotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index para api
        $pilotos = Pilot::all();
        return response()->json(['Pilotos'=>$pilotos, 'mensage' => 'Pilotos encontrados com sucesso!'], 200);

    }
    public function listaPilotos()
    {
        $pilotos = Pilot::all();
        $tableName1 = 'Lista de Pilotos';
        return view('pilotos.lista')
            ->with('pilotos', $pilotos)
            ->with('tableName', $tableName1);
    }
   public function detalhesPiloto($id)
   {
        $piloto = Pilot::find($id);
       // dd($piloto);
       // dd($piloto->usuario);
       // $userlogin = User::where('email', $piloto->email);
       // dd($userlogin);
        return view('pilotos.detalhes')
            ->with('piloto', $piloto);
   }
    public function editarPiloto($id)
    {
        $piloto = Pilot::find($id);
        dd($piloto);
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
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function show(Pilot $pilot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilot $pilot)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilot  $pilot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilot $pilot)
    {
        //
    }
}
