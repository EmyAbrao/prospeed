@extends('prospeed')
@section('conteudo-principal')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$tableName}}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Piloto</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Piloto</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
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
</div>
@endsection