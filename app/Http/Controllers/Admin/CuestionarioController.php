<?php

namespace App\Http\Controllers\Admin;
use App\Models\question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    public function index(){
        $cuestionario = question::all();
        return view("admin.cuestionario.index",compact('cuestionario'));
    }
    public function create(){
        return view('admin.cuestionario.create');
    }
    public function store(Request $request){

        $cuestionario = new question($request->all());
        
     
        $cuestionario->save();
        return redirect('/admin/cuestionario');

    }
    public function update(Request $request,$id){

        $cuestionario = question::findOrFail($id);
        $cuestionario->fill($request->all());
        $cuestionario->save();
        return redirect('/admin/cuestionario');
    }

    public function edit($id){
        $cuestionario = question::findOrFail($id);
        return view('admin.cuestionario.edit',compact('cuestionario'));
    }

 
    public function destroy($id){
        $cuestionario = question::findOrFail($id);
     
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $cuestionario->delete();

        return redirect('/admin/cuestionario');
    }
}
