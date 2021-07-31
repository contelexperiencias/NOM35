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
                <a href="{{ route('dashboard.edit',$company)}}" class="btn btn-primary">Consultar</a>
                </div> 
                </div>           
                </li>

        </div>
        <div class="col-sm-12 " style=" background:#EDEDED;  border-radius: 2%;  border-radius: 2%; height: 420px;">
            <form action="/contacto" method="post" style="background:#EDEDED; ">
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
                        <input style="background: #E8C300; color: white;" type="submit" class="btn btn-danger" name="btnenviar" value="Consultar">
                        <a href="{{ route('dashboard.edit',$company)}}" class="btn btn-primary">Consultar</a>
                    </div> 
                    </div>           
                </li>
          
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
              </div>
              <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                </div>
             
              
              <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
              </div>
              @csrf
              <div class="text-center">
              <input style="background: #E8C300; color: white;" type="submit" class="btn btn-danger" name="btnenviar" value="ENVIAR MENSAJE">
              </div>
    </form>

    </div>     
    </div>
</div>   
</div>
<script>
@if($company == ""){

    $company = $('#selectCategory').val();
@endif

}
$companiavalue = $('#selectCategory').val();

   

</script>
@endsection