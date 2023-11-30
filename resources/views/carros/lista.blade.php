@extends('layouts/layoutMaster')

@section('title', 'Carros')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Carros
</h4>

<!-- Borderless Table -->
<div class="card">
  <h5 class="card-header">Modelos de Carros</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-borderless">
      <thead>
        <tr>
            <th class='col-10 col-md-10'>Modelo</th>
            <th>Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($carros as $car)
            <tr>
                <td>{{$car->model}}</td>
                <td>
                    <a href="carros/{{$car->id}}/detalhes" title= "Detalhes do Carro">
                        <span class="btn btn-xs btn-secondary" aria-hidden="true">
                            <i class='fas fa-search'></i>
                        </span>
                    </a>
                    <a href="carros/{{$car->id}}/editar" title= "Editar Carros">
                        <span class="btn btn-xs btn-warning" aria-hidden="true">
                            <i class='fas fa-edit'></i>
                        </span>
                    </a>
                    <a href="carros/{{$car->id}}/excluir" title= "Excluir Carro">
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