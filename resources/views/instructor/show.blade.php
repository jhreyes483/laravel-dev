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
                            <td>{{ $instructor->id_instructor }}</td>
                                <td>{{ $instructor->nom1.' '.$instructor->nom2 }}</td>
                                <td>{{ $instructor->ape1.' '.$instructor->ape2 }}</td>
                                <td>{{ $gen[ $instructor->genero ] }}</td>
                                <td>{{ $doc[ $instructor->tipoDoc ] }}</td>
                                <td>{{ $instructor->created_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection