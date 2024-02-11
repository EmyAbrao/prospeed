<?php

namespace App\Http\Controllers;

use App\Models\PayHistory;
use Illuminate\Http\Request;

class PayHistoryController extends Controller
{
    public function index()
    {
        // index para api
        $compras = PayHistory::all();
        return response()->json(['compras'=>$PayHistory], 200);

    }
    public function historicoCompras()
    {
        $compras = PayHistory::all();
        $tableName5 = 'Histórico de Compras';
        return view('creditos.lista')
            ->with('compras', $compras)
            ->with('tableName', $tableName5);
    }
    
    //
}
