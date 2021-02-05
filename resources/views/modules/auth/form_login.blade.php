@extends('layouts.auth.app')
@section('content')


        <div class="login-wrap" style="margin-top: 1%; margin-bottom: 1%;">
            <div class="login-html ">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesion</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Bienvenido</label>
                <div class="login-form">
                <form method="post" action="{{ route('login.auth') }}">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="id_admin" class="label">Identificacion</label>
                            <input id="id_admin" type="text" name="id_admin" class="input">
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password</label>
                            <input id="password" name="password" type="password" class="input" data-type="password">
                        </div>


                        <div class="group">
                            <input type="submit" class="button" value="Iniciar Sesion">
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>

@endsection