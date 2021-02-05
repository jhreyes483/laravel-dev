@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5 mx-auto">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('admin.store') }}"
                enctype = "multipart/form-data" 
                
                method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name_user">Identificacion:</label>
                        <input name="id_admin" id="name_user" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Primer nombre</label>
                        <input name="nom1" id="name_user" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Segundo nombre:</label>
                        <input name="nom2" id="name_user" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Primer Apellido:</label>
                        <input name="ape1" id="name_user" type="text" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="name_user">Segundo Apellido:</label>
                        <input name="ape2" id="name_user" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="estado" id="estado">
                            @foreach ($est  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name_user">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="name_user" type="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Genero:</label>
                        <select name="genero" id="">
                            @foreach ($gen  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Foto:</label>
                        <input name="foto" id="password" type="file" class="custom-file-input" id="customFile">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input name="password" id="password" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Tipo de documento:</label>
                        <select name="tipoDoc" id="">
                            @foreach ($doc  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                </form>

            </div>
        </div>
    </div>


@endsection