@extends('layouts/layoutMaster')

@section('title', 'Modalidades')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Modalidade
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Modalidades de Jogo</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th class='col-10 col-md-10'>Descrição</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($tipoSessoes as $ts)
            <tr>
                <td>{{$ts->description}}</td>
                <td>
                    <a href="tipo-sessoes/{{$ts->id}}/detalhes" title= "Detalhes da Modalidade">
                        <span class="btn btn-xs btn-secondary" aria-hidden="true">
                            <i class='fas fa-search'></i>
                        </span>
                    </a>
                    <a href="tipo-sessoes/{{$ts->id}}/editar" title= "Editar Modalidade">
                        <span class="btn btn-xs btn-warning" aria-hidden="true">
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <a href="tipo-sessoes/{{$ts->id}}/excluir" title= "Excluir Modalidade">
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