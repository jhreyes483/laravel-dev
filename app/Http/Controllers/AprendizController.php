<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
use App\Models\Ficha;
use Illuminate\Http\UploadedFile;
class AprendizController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $aprendiz=Aprendiz::all();
        $doc = $this->doc;
        $gen = $this->gen;
        $est =  $this->est;
 
        return view('aprendiz.index',compact('aprendiz', 'doc', 'gen', 'est'));
    }

    //GET
    public function create(){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $est =  $this->est;
        $fichas = Ficha::all();
       // Controller::ver($doc,0,1);
        return view('aprendiz.create' ,compact('doc','gen', 'est', 'fichas')  );
    }

    public function store(Request $request){
        $user =new  Aprendiz($request->all());
        if($request->hasFile('foto')  ){
            $file = $request->file('foto');
            $nombreArchivo = $_FILES['foto']['name'];
            // D:\Laravel\sena\public
            $file->move(public_path("img/user"),$nombreArchivo);
            $user->foto  = $nombreArchivo;
        } 
            $user->save();
        Aprendiz::create($request->all());
        return redirect()->route('aprendiz.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
    }

    public function confirm($id_aprendiz){
        $aprendiz = Aprendiz::findOrFail($id_aprendiz);
        return view('aprendiz.confirm', compact('aprendiz'));
    }

    
    public function destroy($id_aprendiz)
    {
        Aprendiz::find($id_aprendiz)->delete();
        return redirect()->route('aprendiz.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    }

    public function edit($id_aprendiz){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $est = $this->est;
        $fichas = Ficha::all();
        $aprendiz = Aprendiz::findOrFail($id_aprendiz);
        return view('aprendiz.edit', compact('aprendiz', 'doc', 'gen', 'fichas','est'));
    }

    public function update(Request $request, $id_aprendiz){
        $datosexception = request()->except(['_token', '_method']);
        Aprendiz::where('id_aprendiz', '=', $id_aprendiz)->update($datosexception);
        return redirect()->route('aprendiz.show',$id_aprendiz)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    } 
    


    public function show($id_aprendiz){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $aprendiz = Aprendiz::find($id_aprendiz);
        return view('aprendiz.show', compact('aprendiz', 'doc', 'gen'));
    } 

   
}