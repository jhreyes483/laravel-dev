<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('modules.dashboard.index');

    }

    public function perfil()
    {
        $doc =  $this->doc;
        $gen =  $this->gen;
        $usuario = Admin::find(session('USER')->id_admin);
        return view('modules.dashboard.perfil', compact('usuario', 'doc', 'gen')) ;

    }


}
