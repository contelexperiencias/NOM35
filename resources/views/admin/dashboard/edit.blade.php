@extends('layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
<div class="container">
    <div class="row">
        <div class="col-sm-12" style="padding-top:2%">
        
            <li class="list-group-item px-12">
                <h2>Resultado General</h2>
               
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong class="text-black">Total de Cuestionarios: </strong> <strong style="color:blue">{{$count}}</strong></p>      
                    </div>
                    <div class="col-sm-6">
                        <p><strong class="text-black">Promedio: </strong> <strong style="color:blue">{{$promedio}} </strong></p>        
                    </div>
                </div>
            </li> 
        </div>   
        
        <table id="" class="table table-striped">
                    <thead>
                    
                        <th>user_id</th>                
                        <th>Año</th>
                        <th>Total</th>
                        
                    </thead>
                    <tbody>
                       
                    </tbody>

        </table>
        </div>
      
    </div>

          
            <div class="col-sm-12">
            <li class="list-group-item px-12">
                      <!-- Progress Bars -->
                      <div class="mb-2">
                        <strong class="text-muted d-block mb-3">Progress Bars</strong>
                        <div class="progress progress-sm mb-3">
                          <div id="progress-bar-example-1" class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-sm mb-3">
                          <div id="progress-bar-example-2" class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-sm mb-3">
                          <div id="progress-bar-example-3" class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-sm">
                          <div id="progress-bar-example-4" class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <!-- / Progress Bars -->
                    </li>
                    </div>  
        </div>    

        </div> 
        </div>
    </div>
</div>
</div>
@endsection