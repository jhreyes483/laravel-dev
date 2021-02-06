<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;
class ProgramaController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $programa=Programa::all();
        $doc = $this->doc;
        $gen = $this->gen;
        $est =  $this->est;
        return view('programa.index',compact('programa', 'doc', 'gen', 'est'));
    }

    //GET
    public function create(Request $request )
    {
        $est = $this->est;
        // Controller::ver($doc,0,1);
        return view('programa.create',compact('est'));
    }
    public function store(Request $request){
        Programa::create($request->all());

        return redirect('programa')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);;
    }

/*
    public function confirm($id_prog){
        $programa = Programa::findOrFail($id_prog);
        return view('programa.confirm', compact('programa'));
    }


    public function destroy($id_prog)
    {
        Programa::find($id_prog)->delete();
        return redirect()->route('programa.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    }
    */



    public function edit($id_prog){
        $est =  $this->est;
        $programa = Programa::findOrFail($id_prog);
        return view('programa.edit', compact('programa', 'est'));
    }

    public function update(Request $request, $id_prog){
        $datosexception = request()->except(['_token', '_method']);
        Programa::where('id_prog', '=', $id_prog)->update($datosexception);
        return redirect()->route('programa.show',$id_prog)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    }

    public function show($id_prog){
        $est =  $this->est;
        $programa = Programa::find($id_prog);
        return view('programa.show', compact('programa', 'est'));
    }


}
