@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('admin.update',$usuario->id_admin) }}" method="post">

                     @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar usuario</h3>

                    <div class="form-group">
                        <label for="name_user">Identificacion:</label>
                        <input name="id_admin" id="id_admin" type="text" class="form-control" value="{{$usuario->id_admin}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Primer nombre</label>
                        <input name="nom1" id="nom1" type="text" class="form-control" value="{{$usuario->nom1}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Segundo nombre:</label>
                        <input name="nom2" id="nom2" type="text" class="form-control" value="{{$usuario->nom2}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Primer Apellido:</label>
                        <input name="ape1" id="ape1" type="text" class="form-control" value="{{$usuario->ape1}}">
                    </div>

                    
                    <div class="form-group">
                        <label for="name_user">Segundo Apellido:</label>
                        <input name="ape2" id="ape2" type="text" class="form-control" value="{{$usuario->ape2}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="name_user">Estados:</label>
                        <input name="estado" id="estado" type="text" class="form-control" value="{{$usuario->estado}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="fechaNacimiento" type="date" class="form-control" value="{{$usuario->fechaNacimiento}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Genero:</label>
                        <select name="genero" id="genero">
                            @foreach ($gen  as  $i => $d)
                                <option  {{ (( $i == $usuario->genero )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Foto:</label>
                        <input name="foto" id="foto" type="text" class="form-control" value="{{$usuario->foto}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input name="password" id="password" type="pass" class="form-control" value="{{$usuario->password}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Tipo de documento:</label>
                        <select name="tipoDoc" id="tipoDoc">
                            @foreach ($doc  as  $i => $d)
                                <option {{ (( $i == $usuario->tipoDoc)? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                </form>

            </div>
        </div>
    </div>

@endsection