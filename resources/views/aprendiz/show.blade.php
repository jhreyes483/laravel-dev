@extends('layouts.admin.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                         <tr>
                            <th>No Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>genero</th>
                            <th>Tipo de Doc</th>
                            <th>F. creacion</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        <tr>
                            <td>{{ $aprendiz->id_aprendiz }}</td>
                                <td>{{ $aprendiz->nom1.' '.$aprendiz->nom2 }}</td>
                                <td>{{ $aprendiz->ape1.' '.$aprendiz->ape2 }}</td>
                                <td>{{ $gen[ $aprendiz->genero ] }}</td>
                                <td>{{ $doc[ $aprendiz->tipoDoc ] }}</td>
                                <td>{{ $aprendiz->created_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection