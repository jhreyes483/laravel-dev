@extends('layouts.admin.app')
@section('content')
    <div class="container ">
        <div class="row ">
            <div class="col col-md-12  " >
    <h1>Hola, Bienbenido {{ session('USER')->nom1.' '.session('USER')->ape1}}</h1>
            </div>
        </div>
    </div>
    @endsection