@extends('layouts.admin.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>No Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>genero</th>
                            <th>Tipo de Doc</th>
                            <th>Documento</th>
                            <th>F. creacion</th>
                            <th>Ficha</th>
                 
                            <th>Foto</th>
                            <th>Opciones de edicion</th>
                       

                        </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach($aprendiz as $aprendiz)
                            <tr>
                                <td>{{ $aprendiz->id_aprendiz }}</td>
                                <td>{{ $aprendiz->nom1.' '.$aprendiz->nom2 }}</td>
                                <td>{{ $aprendiz->ape1.' '.$aprendiz->ape2 }}</td>
                                <td>{{ $gen[ $aprendiz->genero ] }}</td>
                                <td>{{ $doc[ $aprendiz->tipoDoc ] }}</td>
                                <td>{{ $aprendiz->id_aprendiz }}</td>
                                <td>{{ $aprendiz->fichas['No_ficha']}}</td>
                                <td>{{ $aprendiz->created_at }}</td>
                                <td>  <img width="100" src="img/user/{{ $aprendiz->foto }}" alt=""> </td>
                                <td>
                                    <form action="" method="post">
                                        <a href="{{ route('aprendiz.edit',$aprendiz->id_aprendiz) }}" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-eye-dropper"></i></a>
                                        <a href="{{ route('aprendiz.confirm',$aprendiz->id_aprendiz) }}" class="btn btn-sm btn-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                                        <a href="{{ route('aprendiz.show',$aprendiz->id_aprendiz) }}" class="btn btn-sm btn-info" title="Detalle" ><i class="far fa-eye"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection