<?php

namespace App\Http\Controllers;

use App\Models\Simulator;
use Illuminate\Http\Request;

class SimulatorController extends Controller
{
    public function index()
    {
        // index para api
        $simuladores = Simulator::all();
        return response()->json(['simuladores'=>$simuladores], 200);

    }
    public function simuladoresAgora()
    {
        $simuladores = Simulator::all();
        $tableName5 = 'Jogadores online';
        return view('sessoes.simuladores.lista')
            ->with('simuladores', $simuladores)
            ->with('tableName', $tableName5);
    }
    
    //
}
