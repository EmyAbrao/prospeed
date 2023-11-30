@extends('layouts/layoutMaster')

@section('title', 'Eventos')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Eventos
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Eventos</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th class='col-10 col-md-10'>Nome</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($eventos as $event)
            <tr>
                <td>{{$event->name}}</td>
                <td>
                    <a href="eventos/{{$event->id}}/detalhes" title= "Detalhes do Evento">
                        <span class="btn btn-xs btn-secondary" aria-hidden="true">
                            <i class='fas fa-search'></i>
                        </span>
                    </a>
                    <a href="eventos/{{$event->id}}/editar" title= "Editar Evento">
                        <span class="btn btn-xs btn-warning" aria-hidden="true">
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <a href="eventos/{{$event->id}}/excluir" title= "Excluir Evento">
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