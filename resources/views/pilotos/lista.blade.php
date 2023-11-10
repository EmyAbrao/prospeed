@extends('layouts/layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Pilotos
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Lista de Pilotos</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th>Piloto</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($pilotos as $pilot)
            <tr>
                <td>{{$pilot->name}}</td>
                <td>{{$pilot->email}}</td>
                <td>{{$pilot->phone}}</td>
                <td>
                    <a href="pilotos/{{$pilot->id}}/detalhes" title= "Detalhes do Piloto">
                        <span class="btn btn-xs btn-secondary" aria-hidden="true">
                            <i class='fas fa-search'></i>
                        </span>
                    </a>
                    <a href="pilotos/{{$pilot->id}}/editar" title= "Editar Piloto">
                        <span class="btn btn-xs btn-warning" aria-hidden="true">
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <a href="pilotos/{{$pilot->id}}/excluir" title= "Excluir Piloto">
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