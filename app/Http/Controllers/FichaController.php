<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Jornada;
use App\Models\Programa;
use App\Models\Aprendiz;
class FichaController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(Request $request){
        $rEstado   = $request->get('estado');
        $rJornada  = $request->get('jornada');
       // $ficha=Ficha::all();
       // $est = $this->est;
       // return view('ficha.index',compact('ficha', 'est'));  si   ahora la foto jajajaj tienen el codigo por ahi ?

        if( isset($rEstado) ){
            $doc = $this->doc;
            $gen = $this->gen;
            $est =  $this->est;
            $jornada = Jornada::all();
            $caracter  = $request->get('caracter');
            $ficha     = Ficha::where('estado',"$rEstado")->get();
            return view('ficha.index',compact('ficha', 'doc', 'gen', 'est','jornada'));
        }elseif( isset($rJornada) ){
            $doc = $this->doc;
            $gen = $this->gen;
            $est =  $this->est;
            $jornada = Jornada::all();
            $caracter  = $request->get('caracter');
            $ficha   = Ficha::where('FK_jornada',"$rJornada")->get();
            return view('ficha.index',compact('ficha', 'doc', 'gen', 'est','jornada'));
        }else{
            $doc = $this->doc;
            $gen = $this->gen;
            $est =  $this->est;
            $ficha   =  Ficha::all();
            $jornada = Jornada::all();
            return view('ficha.index',compact('ficha', 'doc', 'gen', 'est', 'jornada'));
        }
        

    }    

    //GET
    public function create(){
        $jornada=Jornada::all();
        $programa=Programa::all();
        $aprendiz=Aprendiz::all();
        $est = $this->est;
        return view('ficha.create',compact('jornada','programa','aprendiz', 'est'));
    }
    public function store(Request $request){
        Ficha::create($request->all());
        return redirect()->route('ficha.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
        //---
    }


    public function confirm($id_ficha){
        $ficha = Ficha::findOrFail($id_ficha);
        $est = $this->est;
        return view('ficha.confirm', compact('ficha', 'est'));
    }

    public function destroy($id_ficha){
        ficha::find($id_ficha)->delete();
        return redirect()->route('ficha.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    }
 
    public function edit($id_ficha){
        $ficha = Ficha::findOrFail($id_ficha);
        $jornada=Jornada::all();
        $programa=Programa::all();
        $aprendiz=Aprendiz::all();
        $est =  $this->est;
        return view('ficha.edit', compact('ficha', 'jornada', 'programa', 'aprendiz', 'est'));
    }
  

    public function update(Request $request, $id_ficha){
        $datosexception = request()->except(['_token', '_method']);
        ficha::where('id_ficha', '=', $id_ficha)->update($datosexception);
        return redirect()->route('ficha.show',$id_ficha)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'   =>'info'
        ]);
    } 

    
  public function show($id_ficha){
        $ficha = Ficha::find($id_ficha);
        $jornada = Jornada::all();
        $programa = Programa::all();
        $aprendiz = Aprendiz::all();
        $est = $this->est;
        return view('ficha.show', compact('ficha','jornada', 'programa', 'aprendiz', 'est'));
    } 
    

   
}