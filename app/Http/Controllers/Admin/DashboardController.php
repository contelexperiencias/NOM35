<?php

namespace App\Http\Controllers\Admin;
use App\Models\answer;
use App\Models\companie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $companias = companie::all();
        $getanios = answer::groupBy()->get();
        $total_cuestionario = answer::join('users_total', 'answers.user_id', '=', 'users_total.user_id')
        ->whereYear('answers.created_at', '=', 2020)
        ->groupBy('answers.user_id','users_total.total')       
        ->get(['answers.user_id','users_total.total']);
        $count = $total_cuestionario->count();
        $promedio =$total_cuestionario->avg('total');
        // $anios = Carbon::createFromFormat('Y-m-d H:i:s', $getanios[1]->created_at)->year;
        return view("admin.dashboard.index",compact('count','total_cuestionario','promedio','companias')); 
    }
    public function edit($compania)
    {
        if($compania == 0){
            $total_cuestionario = answer::join('users_total', 'answers.user_id', '=', 'users_total.user_id')
            ->whereYear('answers.created_at', '=',2020 )
            ->groupBy('answers.user_id','users_total.total')       
            ->get(['answers.user_id','users_total.total']);
            $count = $total_cuestionario->count();
            $promedio =$total_cuestionario->avg('total');

        }
        $total_cuestionario = answer::join('users_total', 'answers.user_id', '=', 'users_total.user_id')
        ->whereYear('answers.created_at', '=', 2020)
        ->groupBy('answers.user_id','users_total.total')       
        ->get(['answers.user_id','users_total.total']);
        $count = $total_cuestionario->count();
        $promedio =$total_cuestionario->avg('total');
        return view("admin.dashboard.edit",compact('count','total_cuestionario','promedio')); 

    }
}
 