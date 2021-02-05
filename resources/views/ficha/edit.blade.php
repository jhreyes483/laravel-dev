@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('ficha.update',$ficha->id_ficha) }}" method="post">

                     @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar ficha</h3>
                    <div class="form-group">
                        <label for="name_user">No ficha:</label>
                        <input name="No_ficha" id="No_ficha" value="{{ $ficha->No_ficha }}" type="text" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="name_user">Descripcion:</label>
                        <input name="descrip" id="descrip" type="text" class="form-control" value="{{$ficha->descrip}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Estado:</label>
                        <select name="estado" id="">
                            @foreach ($est  as  $i => $d)
                                <option {{ (( $i == $ficha->estado )? 'selected ': '' ) }} value="{{ $i }}">{{ $d }}</option>
                            @endforeach
                           
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <Label for="">Jornada:</Label>
                        <select name="FK_jornada" id="FK_jornada" class="form-control" required>
                            <option value="">Seleccionar</option>
                            @foreach($jornada as $jo)
                                <option  {{  ((  $jo->id == $ficha->FK_jornada )? 'selected ' :'')  }}   value="{{$jo->id}}">{{$jo->nom_jornada}}</option>
                            @endforeach
                        </select>
                    </div> 
                     

                    <div class="form-group">
                        <Label for="">Programa:</Label>
                        <select name="FK_prog" id="FK_prog" class="form-control" required>
                            <option value="">Seleccionar</option>
                            @foreach($programa as $pro)
                                <option  {{  (( $pro->id_prog == $ficha->FK_prog )? 'selected ' : '' )  }}   value="{{$pro->id_prog}}">{{$pro->nomProg}}</option>
                            @endforeach
                        </select>
                    </div>



                    <hr>
                    <button type="submit" class="btn btn-primary">Actualizar Ficha</button>
                </form>

            </div>
        </div>
    </div>
 
@endsection