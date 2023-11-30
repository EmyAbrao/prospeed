<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // index para api
        $carros = Car::all();
        return response()->json(['Carros'=>$carros, 'mensage' => 'Carros encontrados com sucesso!'], 200);
    }
    public function listaCarros()
    {
        $carros = Car::all();
        $tableName3 = 'Lista de Carros';
        return view('carros.lista')
            ->with('carros', $carros)
            ->with('tableName', $tableName3);

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
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('carros.detalhes')
            ->with('carro', $car);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        $msg = 'Sucesso ao excluir o carro '. $car->name;
        return redirect ('prospeed/carros');     
        //
    }
}
