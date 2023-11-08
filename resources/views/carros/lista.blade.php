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
                        <th>Modelo</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Modelo</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($carros as $car)
                    <tr>
                        <td>{{$car->model}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection