@extends('layouts.admin.app')

@section('content')


    @if (Session::has('create'))
        <div style="padding: 20px; background-color: #00a65a; color: #ffffff;">
            {{ Session::get('create') }}
        </div>
    @endif



    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">





                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>No Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>genero</th>
                            <th>Tipo de Doc</th>
                            <th>Foto</th>
                            <th>F. creacion</th>
                            <th>Opciones de edición</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        @foreach($instructor as $instructor)
<?php
 $foto = ($instructor->foto??'user.jpg');
?>

                            <tr>
                                <td>{{ $instructor->id_instructor }}</td>
                                <td>{{ $instructor->nom1.' '.$instructor->nom2 }}</td>
                                <td>{{ $instructor->ape1.' '.$instructor->ape2 }}</td>
                                <td>{{ $gen[ $instructor->genero ] }}</td>
                                <td>{{ $doc[ $instructor->tipoDoc ] }}</td>
                                <td>{{ $instructor->created_at }}</td>
                                <td>  <img width="80" height="100" class="img-profile ml-3 rounded-circle" src="img/user/{{   $foto }}" alt=""> </td>
                                <td>
                                    <form action="{{ route('instructor.destroy',$instructor->id_instructor) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('instructor.edit',$instructor->id_instructor) }}" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-eye-dropper"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                                        <a href="{{ route('instructor.show',$instructor->id_instructor) }}" class="btn btn-sm btn-info" title="Detalle" ><i class="far fa-eye"></i></a>
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