@extends('layouts/layoutMaster')

@section('title', 'Simuladores')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Simuladores
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">On-line agora</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th>Piloto On-line</th>
            <th>Simulador</th>
            <th>Início</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($simuladores as $item)
            <tr>
                <td>{{$item->pilot->name}}</td>
                <td>{{$item->simulator_name}}</td>
                <td>{{$item->update_at}}</td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Borderless Table -->
@endsection