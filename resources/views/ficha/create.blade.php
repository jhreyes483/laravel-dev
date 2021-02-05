@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5 mx-auto">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('ficha.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name_user">No ficha:</label>
                        <input name="No_ficha" id="No_ficha" type="text" class="form-control">
                    </div>

                   
                    <div class="form-group">
                        <label for="descrip">Descripcion:</label>
                        <textarea  name="descrip" id="descrip" cols="5" rows="5" class="form-control"></textarea>
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
                        <Label for="">Jornada:</Label>
                        <select name="FK_jornada" id="FK_jornada" class="form-control" required>
                            <option value="">Seleccionar</option>
                            @foreach($jornada as $jo)
                                <option value="{{$jo->id}}">{{$jo->nom_jornada}}</option>
                            @endforeach
                        </select>
                    </div> 
                     

                    <div class="form-group">
                        <Label for="">Programa:</Label>
                        <select name="FK_prog" id="FK_prog" class="form-control" required>
                            <option value="">Seleccionar</option>
                            @foreach($programa as $pro)
                                <option value="{{$pro->id_prog}}">{{$pro->nomProg}}</option>
                            @endforeach
                        </select>
                    </div>

  


                    
                  

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Ficha</button>
                </form>

            </div>
        </div>
    </div>


@endsection