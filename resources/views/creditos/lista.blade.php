@extends('layouts/layoutMaster')

@section('title', 'Histórico de Compras')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Compras
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Histórico de Compras</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th>Piloto</th>
            <th>Valor Pago</th>
            <th>Tipo de Crédito</th>
            <th>Tempo Adquirido</th>
            <th>Funcionário</th>
            <th>Data/Hora</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($compras as $item)
            <tr>
                <td>{{$item->pilot->usuario->name}}</td>
                <td>{{$item->purchase_value}}</td>
                <td>{{$item->credit_type}}</td>
                <td>{{$item->purchased_time}}</td>
                <td>{{$item->employee->name}}</td>
                <td>{{$item->pay_date}}</td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Borderless Table -->
@endsection