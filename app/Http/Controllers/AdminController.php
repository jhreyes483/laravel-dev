<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $usuarios=Admin::all();
        $doc = $this->doc;
        $gen = $this->gen;
        return view('admin.index',compact('usuarios', 'doc', 'gen'));
    }

    //GET
    public function create(){
        $est =  $this->est;
        $doc =  $this->doc;
        $gen =  $this->gen;
       // Controller::ver($doc,0,1);
        return view('admin.create' ,compact('doc','gen','est'));
    }

    public function store(Request $request){
        // Foto------------------------
        $user =new  Admin($request->all());
        if($request->hasFile('foto')  ){
            $file = $request->file('foto');
            $nombreArchivo = $_FILES['foto']['name'];
            // D:\Laravel\sena\public
            $file->move(public_path("img/user"),$nombreArchivo);
            $user->foto  = $nombreArchivo;
        } 
            $user->save();
        Admin::create($request->all());
        // Aler---------------------------
        return redirect()->route('admin.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
        //-------------------------
    }

    public function destroy($id_admin){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Admin::find($id_admin)->delete();
        return redirect()->route('admin.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    } 

    public function edit($id_admin){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $est =  $this->est;
        $usuario = Admin::findOrFail($id_admin);
        return view('admin.edit', compact('usuario', 'doc', 'gen','est'));
    }

    public function update(Request $request, $id_admin){
        $datosexception = request()->except(['_token', '_method']);
        Admin::where('id_admin', '=', $id_admin)->update($datosexception);
        return redirect()->route('admin.show',$id_admin)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    } 

    public function show($id_admin){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $usuario = Admin::find($id_admin);
        return view('admin.show', compact('usuario', 'doc', 'gen'));
    } 
}