<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\categories_result;
use App\Models\domains_result;
use App\Models\question;
use App\Models\companie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $companias = companie::all();
        $usuario= User::wheretipo_usuario('0')->get();
        // $usuario = User::all();
        return view("admin.Usuario.index",compact('usuario','companias'));
    }
    public function edit($id){
    
        $categoriesResults = categories_result::whereuser_id($id)->get();      
        $domains_result = domains_result::whereuser_id($id)->get(); 
        $users = User::join('users_total', 'users.id', '=', 'users_total.user_id')
        ->join('companies', 'users.company_id', '=', 'companies.id')
        ->join('positions', 'users.position_id', '=', 'positions.id')
        ->where('users.id',$id)
        ->get(['users.*','companies.company_name', 'positions.position_name','users_total.total']);
        $preguntas=question::join('answers','questions.id', '=','answers.question_id')
            ->join('items','questions.item','=','items.item')
            ->where('answers.user_id',$id)
            ->get(['questions.item','questions.question','answers.answer','items.type']);
              
     
        return view('admin.usuario.edit',compact('users','categoriesResults','domains_result','preguntas'));
    }
    
}
