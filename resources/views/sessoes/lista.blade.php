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
                        <th>Carro</th>
                        <th>Evento</th>
                        <th>Pista</th>
                        <th>Sessão</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Piloto</th>
                        <th>Carro</th>
                        <th>Evento</th>
                        <th>Pista</th>
                        <th>Sessão</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($sessoes as $tudao)
                    <tr>
                        <td>{{$tudao->pilot->name}}</td>
                        <td>{{$tudao->car->model}}</td>
                        <td>{{$tudao->event->name}}</td>
                        <td>{{$tudao->racetrack->name}}</td>
                        <td>{{$tudao->sessionType->description}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection