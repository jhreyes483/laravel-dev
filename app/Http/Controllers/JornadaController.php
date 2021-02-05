<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jornada;
class FichaController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $jornada=Jornada::all();
        return view('jornada.index',compact('jornada'));
    }

    //GET
    public function create(){
        return view('jornada.create');
    }

    public function store(Request $request){

        Jornada::create($request->all());
        return redirect()->route('jornada.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
    }

/*
    public function confirm($id_ficha){
        $ficha = ficha::findOrFail($id_ficha);
        return view('ficha.confirm', compact('ficha'));
    }

    
    public function destroy($id_ficha)
    {
        ficha::find($id_ficha)->delete();
        return redirect()->route('ficha.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    }
    

    

    public function edit($id_ficha){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $ficha = ficha::findOrFail($id_ficha);
        return view('ficha.edit', compact('ficha', 'doc', 'gen'));
    }

    public function update(Request $request, $id_ficha){
        $datosexception = request()->except(['_token', '_method']);
        ficha::where('id_ficha', '=', $id_ficha)->update($datosexception);
        return redirect('ficha')->with('edit', 'ficha Actualizado');
    } 

    public function show($id_ficha){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $ficha = ficha::find($id_ficha);
        return view('ficha.show', compact('ficha', 'doc', 'gen'));
    } 

   */
}