@extends('layouts/layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Autódromos
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Autódromos</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th class='col-10 col-md-10'>Nome</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($pistas as $raceTrack)
            <tr>
                <td>{{$raceTrack->name}}</td>
                <td>
                    <a href="pistas/{{$raceTrack->id}}/detalhes" title= "Detalhes da Pista">
                        <span class="btn btn-xs btn-secondary" aria-hidden="true">
                            <i class='fas fa-search'></i>
                        </span>
                    </a>
                    <a href="pistas/{{$raceTrack->id}}/editar" title= "Editar Pista">
                        <span class="btn btn-xs btn-warning" aria-hidden="true">
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <a href="pistas/{{$raceTrack->id}}/excluir" title= "Excluir Pista">
                        <span class="btn btn-xs btn-danger" aria-hidden="true">
                            <i class='fas fa-trash'></i>
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Borderless Table -->
@endsection