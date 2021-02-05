@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5 mx-auto">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('aprendiz.store') }}"
                enctype = "multipart/form-data"  method="post">
                    @csrf

                    <div class="form-group">
                        <label for="password">Tipo de documento:</label>
                        <select name="tipoDoc" id="">
                            @foreach ($doc  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name_user">Identificacion:</label>
                        <input name="id_aprendiz" id="name_user" type="text" class="form-control">
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
                        <select name="estado" id="">
                            @foreach ($est  as  $i => $d)
                                <option  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">  Ficha:</label>
                        <select name="FK_ficha" id="">
                            @foreach ($fichas  as  $i => $f)
                                <option  value="{{ $f->id_ficha }}">{{ $f->No_ficha }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input name="correo" id="correo" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="foto" type="date" required class="form-control">
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
                        <label for="foto">Foto:</label>
                        <input name="foto" id="password" type="file" class="form-control">
                    </div>




                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Aprendiz</button>
                </form>

            </div>
        </div>
    </div>


@endsection