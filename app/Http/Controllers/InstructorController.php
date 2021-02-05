<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
class InstructorController extends Controller


{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $instructor=Instructor::all();
        $doc = $this->doc;
        $gen = $this->gen;
        return view('instructor.index',compact('instructor', 'doc', 'gen'));
    }

    //GET
    public function create(){
        $est = $this->est;
        $doc =  $this->doc;
        $gen =  $this->gen;
       // Controller::ver($doc,0,1);
        return view('instructor.create' ,compact('doc','gen','est')  );
    }

    public function store(Request $request){
        $user =new  Instructor($request->all());
        if($request->hasFile('foto')  ){
            $file = $request->file('foto');
            $nombreArchivo = $_FILES['foto']['name'];
            // D:\Laravel\sena\public
            $file->move(public_path("img/user"),$nombreArchivo);
            $user->foto  = $nombreArchivo;
        } 
            $user->save();
        Instructor::create($request->all());
        return redirect()->route('instructor.index')->with([
            'message'=>'se a creado un nuevo registro',
            'type'=>'success'
        ]);
    }

   
    public function destroy($id_admin){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Instructor::find($id_admin)->delete();
        return redirect()->route('instructor.index')->with([
            'message'=>'se ha eliminado correctamente',
            'type'=>'warning'
        ]);
    } 

    public function edit($id_admin){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $instructor = Instructor::findOrFail($id_admin);
        return view('instructor.edit', compact('instructor', 'doc', 'gen'));
    }

    public function update(Request $request, $id_instructor){
        $datosexception = request()->except(['_token', '_method']);
        Instructor::where('id_instructor', '=', $id_instructor)->update($datosexception);
        return redirect()->route('instructor.show', $id_instructor)->with([
            'message'=>'Se a actualizado correctmente el usuario',
            'type'=>'info'
        ]);
    } 

    public function show($id_instructor){
        $doc =  $this->doc;
        $gen =  $this->gen;
        $instructor = Instructor::find($id_instructor);
        return view('instructor.show', compact('instructor', 'doc', 'gen'));
    } 

   
}