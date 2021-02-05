@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('programa.update',$programa->id_prog) }}" method="post">

                     @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar programa</h3>

                    <div class="form-group">
                        <label for="name_user">Nombre del programa:</label>
                        <input name="nomProg" id="name_user" type="text" class="form-control" value="{{$programa->nomProg}}">
                    </div>

                    <div class="form-group">
                        <label for="name_user" >Acronimo: </label>
                        <input class="text-uppercase form-control" name="acronimo" id="name_user" onkeyup="mayus(this)" value="{{$programa->acronimo}}" >
                    </div>

                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="estado" id="">
                            @foreach ($est  as  $i => $d)
                                <option {{ (( $i == $programa->estado )? 'selected ': '' ) }} value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Actualizar Programa</button>
                </form>

            </div>
        </div>
    </div>

@endsection