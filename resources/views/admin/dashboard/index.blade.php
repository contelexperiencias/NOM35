@extends('layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
<div class="container">
    <div class="row">

        <div class="col-sm-12" style="padding-top:2%">
        <li class="list-group-item px-12"> 
        <div class="row">
            <div class="col-sm-6">           
            <label for="browser">compañia:</label>
            <select id="selectCategory">
            <option value="0">GENERAL</option>
            @forelse ($companias as $item)
                <option value="{{$item->id}}">{{$item->company_name}}</option>                
            @empty                          
            @endforelse
            </select> 
            </div> 
            <div class="col-sm-6">
            <label for="browser">Año:</label>
            <select id="selectAnio">         
          
                <option value="{{ now()->year }}">{{ now()->year }}</option>   
                <option value="{{ now()->year -1 }}">{{ now()->year -1 }}</option>  
                <option value="{{ now()->year -2 }}">{{ now()->year -2 }}</option>              
                <option value="{{ now()->year -3 }}">{{ now()->year -3 }}</option>  
          
            </select> 
            <a href="{{ route('dashboard.edit','0')}}" class="btn btn-primary">Consultar</a>
            </div> 
            </div>           
            </li>

        </div>     
    </div>
</div>   
</div>
@endsection