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
                            <td>{{ $usuario->id_admin }}</td>
                                <td>{{ $usuario->nom1.' '.$usuario->nom2 }}</td>
                                <td>{{ $usuario->ape1.' '.$usuario->ape2 }}</td>
                                <td>{{ $gen[ $usuario->genero ] }}</td>
                                <td>{{ $doc[ $usuario->tipoDoc ] }}</td>
                                <td>{{ $usuario->created_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection