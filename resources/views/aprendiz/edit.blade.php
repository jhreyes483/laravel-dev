@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">




            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">

             

                <form action="{{ route('aprendiz.update',$aprendiz->id_aprendiz) }}" method="post">

                     @csrf
                    {{method_field('PUT')}}

                    <h3 class="mb-5">Editar aprendiz</h3>


                    <div class="form-group">
                        <label for="name_user">Identificacion:</label>
                        <input name="id_aprendiz" id="id_aprendiz" type="text" class="form-control" value="{{$aprendiz->id_aprendiz}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Primer nombre</label>
                        <input name="nom1" id="nom1" type="text" class="form-control" value="{{$aprendiz->nom1}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Segundo nombre:</label>
                        <input name="nom2" id="nom2" type="text" class="form-control" value="{{$aprendiz->nom2}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user">Primer Apellido:</label>
                        <input name="ape1" id="ape1" type="text" class="form-control" value="{{$aprendiz->ape1}}">
                    </div>

                    
                    <div class="form-group">
                        <label for="name_user">Segundo Apellido:</label>
                        <input name="ape2" id="ape2" type="text" class="form-control" value="{{$aprendiz->ape2}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="Estado" id="Estado">
                            @foreach ($est  as  $i => $d)
                                <option  {{ (( $i == $aprendiz->estado )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name_user">Fecha de nacimiento:</label>
                        <input name="fechaNacimiento" id="fechaNacimiento" type="date" class="form-control" value="{{$aprendiz->fechaNacimiento}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Genero:</label>
                        <select name="genero" id="genero" class="form-control">
                            @foreach ($gen  as  $i => $d)
                                <option  {{ (( $i == $aprendiz->genero )? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
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
                        <label for="password">Tipo de documento:</label>
                        <select name="tipoDoc" id="tipoDoc" class="form-control">
                            @foreach ($doc  as  $i => $d)
                                <option {{ (( $i == $aprendiz->tipoDoc)? 'selected ': '') }}  value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Actualizar Aprendiz</button>
                </form>

            </div>
        </div>
    </div>
 
@endsection