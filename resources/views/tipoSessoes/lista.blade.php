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
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Descrição</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tipoSessoes as $ts)
                    <tr>
                        <td>{{$ts->description}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection