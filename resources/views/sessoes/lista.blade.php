@extends('layouts/layoutMaster')

@section('title', 'Sessões')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Sessões
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Histórico de Sessões</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th>Piloto</th>
            <th>Carro</th>
            <th>Evento</th>
            <th>Pista</th>
            <th>Sessão</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($sessoes as $tudao)
            <tr>
                <td>{{$tudao->pilot->name}}</td>
                <td>{{$tudao->car->model}}</td>
                <td>{{$tudao->event->name}}</td>
                <td>{{$tudao->racetrack->name}}</td>
                <td>{{$tudao->sessionType->description}}</td>
                <td>{{$tudao->created_at->format('d/m/Y H:i:s')}}</td>
                <td>
                    <a href="sessoes/{{$tudao->id}}/detalhes" title= "Detalhes da Sessão">
                        <span class="btn btn-xs btn-secondary" aria-hidden="true">
                            <i class='fas fa-search'></i>
                        </span>
                    </a>
                    <a href="sessoes/{{$tudao->id}}/excluir" title= "Excluir Sessão">
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