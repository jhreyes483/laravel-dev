@extends('layouts.admin.app')
@section('content')
    <div class="container py-5">
        <h1>¿Deseas eliminar el registro de {{ $aprendiz->nom1 }} {{ $aprendiz->ape1 }}? </h1>
        <form method="post" 
        enctype = "multipart/form-data" 
        action="{{ route('aprendiz.destroy', $aprendiz->id_aprendiz )}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="redondo btn btn-danger">
                <i class="fas fa-trash-alt"></i> Eliminar
            </button>
            <a href="{{route('dashboard.index')}}" class="btn btn-primary" >Volver</a>
        </form>
    </div>
@endsection
