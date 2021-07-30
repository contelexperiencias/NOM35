<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Image;
use Session;

class CategorieController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view("admin.categorie.index",compact('categories'));
    }
    public function create(){
        return view('admin.categorie.create');
    }
    public function store(Request $request){

        $categoria = new Categorie($request->all());       
       
        $categoria->save();
        return redirect('/admin/categorie');

    }
    public function update(Request $request,$id){

        $categoria = Categorie::findOrFail($id);
        $categoria->fill($request->all());
        $categoria->save();
        return redirect('/admin/categorie');
    }

    public function edit($id){
        $categoria = Categorie::findOrFail($id);
        return view('admin.categorie.edit',compact('categoria'));
    }

 
    public function destroy($id){
        $categoria = Categorie::findOrFail($id);
     
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $categoria->delete();

        return redirect('/admin/categorie');
    }
}
