@extends('layouts.admin.app')
@section('content')
    <div class="container py-5">
        <h1>¿Deseas actualizar el estado? {{  $est[$ficha->estado] }} </h1>
        <form method="post" action="{{ route('ficha.update', $ficha->id_ficha )}}">

            @csrf
            {{method_field('PATCH')}}

            <div class="form-group">
                <label for="password">Estado:</label>
                <select name="estado" id="">
                    @foreach ($est  as  $i => $d)
                        <option {{ (( $i == $ficha->estado )? 'selected ': '' ) }} value="{{ $i }}">{{ $d }}</option>
                    @endforeach
                   
                
                </select>
            </div>
 
            <button type="submit" class="redondo btn btn-success">
                <i class="fas fa-book-alt"></i> Actualizar
            </button>
            <a href="{{route('ficha.index')}}" class="btn btn-primary" >Volver</a>
        </form>
    </div>
@endsection
