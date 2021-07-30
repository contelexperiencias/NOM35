@extends('layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
<div class="container">
    <div class="row">
        <div class="col-sm-12" style="padding-top:2%">
            <li class="list-group-item px-12">
                <h2>Datos Generales</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong class="text-black">Nombre: </strong> {{$users[0]->fullName}} </p>

                        <p><strong class="text-black">Email: </strong> {{$users[0]->email}} </p>
                        <p><strong class="text-black">Genero: </strong>  @if ( $users[0]->gender_id == '1') Masculino @elseif  ( $users[0]->gender_id == '2') Femenino @else Prefiero no decir @endif  </p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong class="text-black">Fecha de evaluación: </strong> {{$users[0]->created_at}} </p>
                        <p><strong class="text-black">Compañia: </strong> {{$users[0]->company_name}} </p>
                
                        <p><strong class="text-black">Posición: </strong> {{$users[0]->position_name}} </p>            
                    </div>
                </div>
            </li>
        </div>
        <div class="col-sm-12" style="padding-top:2%">
            <li class="list-group-item px-12">
                <h2>Calificación Global del Cuestionario</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p><strong class="text-black">PUNTAJE: </strong> <strong style="color:blue">{{$users[0]->total}}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p><strong class="text-black">Interpretación:
                            </strong> Nivel de riesgo 
                            <strong style="color:blue">
                            @if ($users[0]->total < '50') Nulo 
                            @elseif  ( $users[0]->total < '75') Bajo 
                            @elseif  ( $users[0]->total >= '75' &&  $users[0]->total < 99) Medio 
                            @elseif  ( $users[0]->total >= '99' &&  $users[0]->total < '140') Alto 
                            @elseif  ( $users[0]->total >= '140') MUY ALTO 
                            @endif  </strong></p> 
                        </div>  
                    </div>
            </li>        
        </div>    
        <div class="col-sm-12" style="padding-top:2%">
            <li class="list-group-item px-12">
                <h2>Calificación del Cuestionario por Categorias</h2>
                    <div class="mb-2">
                        @forelse ($categoriesResults as $item)
                        @if ($item->category_id == '1')
                        <label class="text-black" for="category"><strong class="text-black">Ambiente de trabajo: {{$item->result}} </strong> </label>
                        <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                        @if ($item->result < '5') #00b8d8 
                        @elseif  ( $item->result >= '5' && $item->result < '9' ) #17c671 
                        @elseif  ( $item->result >= '9' &&  $item->result < 11) #ffc107 
                        @elseif  ( $item->result >= '11' &&  $item->result < '14') #ffb400 
                        @elseif  ( $item->result >= '14') red 
                        @endif         
                        
                        ;" id="" value="Nivel de Riesgo: @if ($item->result < '5') Nulo 
                        @elseif  ( $item->result >= '5' && $item->result < '9' ) Bajo 
                        @elseif  ( $item->result >= '9' &&  $item->result < 11) Medio 
                        @elseif  ( $item->result >= '11' &&  $item->result < '14') Alto 
                        @elseif  ( $item->result >= '14') MUY ALTO 
                        @endif  
                        " disabled>
                        @endif 
                        @if ($item->category_id == '2') 
                        <label class="text-black" for="category"><strong class="text-black">Factores propios de la actividad: {{$item->result}} </strong> </label> 
                    
                        <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                        @if ($item->result < '15') #00b8d8 
                        @elseif  ( $item->result >= '15' && $item->result < '30' )  #17c671 
                        @elseif  ( $item->result >= '30' &&  $item->result < '45') #ffc107 
                        @elseif  ( $item->result >= '45' &&  $item->result < '60') #ffb400 
                        @elseif  ( $item->result >= '60') red 
                        @endif   
                            " id="" value="Nivel de Riesgo: @if ($item->result < '15') Nulo 
                        @elseif  ( $item->result >= '15' && $item->result < '30' ) Bajo 
                        @elseif  ( $item->result >= '30' &&  $item->result < '45') Medio 
                        @elseif  ( $item->result >= '45' &&  $item->result < '60') Alto 
                        @elseif  ( $item->result >= '60') MUY ALTO 
                        @endif   
                        " disabled>   
                    
                        @endif 
                        @if ($item->category_id == '3')
                        
                        <label class="text-black" for="category"><strong class="text-black">Organización del tiempo de trabajo: {{$item->result}}</strong> </label> 
                        <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                        @if ($item->result < '5')  #00b8d8  
                        @elseif  ( $item->result >= '5' && $item->result < '7' ) #17c671 
                        @elseif  ( $item->result >= '7' &&  $item->result < '10') #ffc107 
                        @elseif  ( $item->result >= '10' &&  $item->result < '13')  #ffb400 
                        @elseif  ( $item->result >= '13') red 
                        @endif    
                            " id="" value="Nivel de Riesgo: @if ($item->result < '5') Nulo 
                        @elseif  ( $item->result >= '5' && $item->result < '7' ) Bajo 
                        @elseif  ( $item->result >= '7' &&  $item->result < '10') Medio 
                        @elseif  ( $item->result >= '10' &&  $item->result < '13') Alto 
                        @elseif  ( $item->result >= '13') MUY ALTO 
                        @endif     
                        " disabled>
                        @endif 
                        @if ($item->category_id == '4')
                        
                        <label class="text-black" for="category"><strong class="text-black">Liderazgo y relaciones en el trabajo: {{$item->result}}</strong> </label> 
                        <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                        @if ($item->result < '14') #00b8d8 
                        @elseif  ( $item->result >= '14' && $item->result < '29' ) #17c671 
                        @elseif  ( $item->result >= '29' &&  $item->result < 42) #ffc107
                        @elseif  ( $item->result >= '42' &&  $item->result < '58') #ffb400 
                        @elseif  ( $item->result >= '58') red 
                        @endif    
                            " id="" value="Nivel de Riesgo: @if ($item->result < '14') Nulo 
                        @elseif  ( $item->result >= '14' && $item->result < '29' ) Bajo 
                        @elseif  ( $item->result >= '29' &&  $item->result < 42) Medio 
                        @elseif  ( $item->result >= '42' &&  $item->result < '58') Alto 
                        @elseif  ( $item->result >= '58') MUY ALTO 
                        @endif 
                        " disabled>         
                        
                        @endif 
                        @if ($item->category_id == '5')
                        <label class="text-black" for="category"><strong class="text-black">Entorno organizacional: {{$item->result}}</strong> </label> 
                        <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                        @if ($item->result < '10') #00b8d8 
                        @elseif  ( $item->result >= '10' && $item->result < '14' ) #17c671 
                        @elseif  ( $item->result >= '14' &&  $item->result < '18') #ffc107 
                        @elseif  ( $item->result >= '18' &&  $item->result < '23') #ffb400 
                        @elseif  ( $item->result >= '23') red 
                        @endif  
                            " id="" value="Nivel de Riesgo: @if ($item->result < '10') Nulo 
                        @elseif  ( $item->result >= '10' && $item->result < '14' ) Bajo 
                        @elseif  ( $item->result >= '14' &&  $item->result < '18') Medio 
                        @elseif  ( $item->result >= '18' &&  $item->result < '23') Alto 
                        @elseif  ( $item->result >= '23') MUY ALTO 
                        @endif           
                        "  disabled>           
                        @endif 
                        @empty                        
                        @endforelse
                    </div>
            </li>
        </div>    
        <div class="col-sm-12" style="padding-top:2%">
            <li class="list-group-item px-12">
                <h2>Calificación del Cuestionario por Dominio</h2>           
                    @forelse ($domains_result as $item)
                    @if ($item->domain_id == '1')  
                    
                    <label class="text-black" for="category"><strong class="text-black">Condiciones en el ambiente de trabajo: {{$item->result}} </strong> </label>
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '5') #00b8d8 
                    @elseif  ( $item->result >= '5' && $item->result < '9' ) #17c671 
                    @elseif  ( $item->result >= '9' &&  $item->result < 11) #ffc107 
                    @elseif  ( $item->result >= '11' &&  $item->result < '14') #ffb400 
                    @elseif  ( $item->result >= '14') red 
                    @endif         
                    
                    ;" id="" value="Nivel de Riesgo: @if ($item->result < '5') Nulo 
                    @elseif  ( $item->result >= '5' && $item->result < '9' ) Bajo 
                    @elseif  ( $item->result >= '9' &&  $item->result < 11) Medio 
                    @elseif  ( $item->result >= '11' &&  $item->result < '14') Alto 
                    @elseif  ( $item->result >= '14') MUY ALTO 
                    @endif  
                    " disabled>
                    @endif 
                    @if ($item->domain_id == '3') 
                    <label class="text-black" for="category"><strong class="text-black">Carga de trabajo: {{$item->result}} </strong> </label> 
                
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '15') #00b8d8 
                    @elseif  ( $item->result >= '15' && $item->result < '21' )  #17c671 
                    @elseif  ( $item->result >= '21' &&  $item->result < '27') #ffc107 
                    @elseif  ( $item->result >= '27' &&  $item->result < '37') #ffb400 
                    @elseif  ( $item->result >= '37') red 
                    @endif   
                        " id="" value="Nivel de Riesgo: @if ($item->result < '15') Nulo 
                    @elseif  ( $item->result >= '15' && $item->result < '21' ) Bajo 
                    @elseif  ( $item->result >= '21' &&  $item->result < '27') Medio 
                    @elseif  ( $item->result >= '27' &&  $item->result < '37') Alto 
                    @elseif  ( $item->result >= '37') MUY ALTO 
                    @endif   
                    " disabled>   
                
                    @endif 
                    @if ($item->domain_id == '4')
                    
                    <label class="text-black" for="category"><strong class="text-black">Falta de control sobre el trabajo: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '11')  #00b8d8  
                    @elseif  ( $item->result >= '11' && $item->result < '16' ) #17c671 
                    @elseif  ( $item->result >= '16' &&  $item->result < '21') #ffc107 
                    @elseif  ( $item->result >= '21' &&  $item->result < '25')  #ffb400 
                    @elseif  ( $item->result >= '25') red 
                    @endif    
                        " id="" value="Nivel de Riesgo: @if ($item->result < '11') Nulo 
                    @elseif  ( $item->result >= '11' && $item->result < '16' ) Bajo 
                    @elseif  ( $item->result >= '16' &&  $item->result < '21') Medio 
                    @elseif  ( $item->result >= '21' &&  $item->result < '25') Alto 
                    @elseif  ( $item->result >= '25') MUY ALTO 
                    @endif     
                    " disabled>
                    @endif 
                    @if ($item->domain_id == '5')
                    
                    <label class="text-black" for="category"><strong class="text-black">Jornada de trabajo: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '1') #00b8d8 
                    @elseif  ( $item->result >= '1' && $item->result < '2' ) #17c671 
                    @elseif  ( $item->result >= '2' &&  $item->result < 4) #ffc107
                    @elseif  ( $item->result >= '4' &&  $item->result < '6') #ffb400 
                    @elseif  ( $item->result >= '6') red 
                    @endif    
                        " id="" value="Nivel de Riesgo: @if ($item->result < '1') Nulo 
                    @elseif  ( $item->result >= '1' && $item->result < '2' ) Bajo 
                    @elseif  ( $item->result >= '2' &&  $item->result < 4) Medio 
                    @elseif  ( $item->result >= '4' &&  $item->result < '6') Alto 
                    @elseif  ( $item->result >= '6') MUY ALTO 
                    @endif 
                    " disabled>         
                    
                    @endif 
                    @if ($item->domain_id == '6')
                    <label class="text-black" for="category"><strong class="text-black">Interferencia en la relación trabajo-familia: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '4') #00b8d8 
                    @elseif  ( $item->result >= '4' && $item->result < '6' ) #17c671 
                    @elseif  ( $item->result >= '6' &&  $item->result < '8') #ffc107 
                    @elseif  ( $item->result >= '8' &&  $item->result < '10') #ffb400 
                    @elseif  ( $item->result >= '10') red 
                    @endif  
                        " id="" value="Nivel de Riesgo: @if ($item->result < '4') Nulo 
                    @elseif  ( $item->result >= '4' && $item->result < '6' ) Bajo 
                    @elseif  ( $item->result >= '6' &&  $item->result < '8') Medio 
                    @elseif  ( $item->result >= '8' &&  $item->result < '10') Alto 
                    @elseif  ( $item->result >= '10') MUY ALTO 
                    @endif           
                    "  disabled>           
                    @endif 
                    @if ($item->domain_id == '7')
                    <label class="text-black" for="category"><strong class="text-black">Liderazgo: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '9') #00b8d8 
                    @elseif  ( $item->result >= '9' && $item->result < '12' ) #17c671 
                    @elseif  ( $item->result >= '12' &&  $item->result < '16') #ffc107 
                    @elseif  ( $item->result >= '16' &&  $item->result < '20') #ffb400 
                    @elseif  ( $item->result >= '20') red 
                    @endif  
                        " id="" value="Nivel de Riesgo: @if ($item->result < '9') Nulo 
                    @elseif  ( $item->result >= '9' && $item->result < '12' ) Bajo 
                    @elseif  ( $item->result >= '12' &&  $item->result < '16') Medio 
                    @elseif  ( $item->result >= '16' &&  $item->result < '20') Alto 
                    @elseif  ( $item->result >= '20') MUY ALTO 
                    @endif           
                    "  disabled>           
                    @endif 
                    @if ($item->domain_id == '8')
                    <label class="text-black" for="category"><strong class="text-black">Relaciones en el trabajo: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '10') #00b8d8 
                    @elseif  ( $item->result >= '10' && $item->result < '13' ) #17c671 
                    @elseif  ( $item->result >= '13' &&  $item->result < '17') #ffc107 
                    @elseif  ( $item->result >= '17' &&  $item->result < '21') #ffb400 
                    @elseif  ( $item->result >= '21') red 
                    @endif  
                        " id="" value="Nivel de Riesgo: @if ($item->result < '10') Nulo 
                    @elseif  ( $item->result >= '10' && $item->result < '13' ) Bajo 
                    @elseif  ( $item->result >= '13' &&  $item->result < '17') Medio 
                    @elseif  ( $item->result >= '17' &&  $item->result < '21') Alto 
                    @elseif  ( $item->result >= '21') MUY ALTO 
                    @endif           
                    "  disabled>           
                    @endif
                    @if ($item->domain_id == '10')
                    <label class="text-black" for="category"><strong class="text-black">Violencia: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '7') #00b8d8 
                    @elseif  ( $item->result >= '7' && $item->result < '10' ) #17c671 
                    @elseif  ( $item->result >= '10' &&  $item->result < '13') #ffc107 
                    @elseif  ( $item->result >= '13' &&  $item->result < '16') #ffb400 
                    @elseif  ( $item->result >= '16') red 
                    @endif  
                        " id="" value="Nivel de Riesgo: @if ($item->result < '7') Nulo 
                    @elseif  ( $item->result >= '7' && $item->result < '10' ) Bajo 
                    @elseif  ( $item->result >= '10' &&  $item->result < '13') Medio 
                    @elseif  ( $item->result >= '13' &&  $item->result < '16') Alto 
                    @elseif  ( $item->result >= '16') MUY ALTO 
                    @endif           
                    "  disabled>           
                    @endif 
                    @if ($item->domain_id == '13')
                    <label class="text-black" for="category"><strong class="text-black">Reconocimiento del desempeño: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '6') #00b8d8 
                    @elseif  ( $item->result >= '6' && $item->result < '10' ) #17c671 
                    @elseif  ( $item->result >= '10' &&  $item->result < '14') #ffc107 
                    @elseif  ( $item->result >= '14' &&  $item->result < '18') #ffb400 
                    @elseif  ( $item->result >= '18') red 
                    @endif  
                        " id="" value="Nivel de Riesgo: @if ($item->result < '6') Nulo 
                    @elseif  ( $item->result >= '6' && $item->result < '10' ) Bajo 
                    @elseif  ( $item->result >= '10' &&  $item->result < '14') Medio 
                    @elseif  ( $item->result >= '14' &&  $item->result < '18') Alto 
                    @elseif  ( $item->result >= '18') MUY ALTO 
                    @endif           
                    "  disabled>           
                    @endif 
                    @if ($item->domain_id == '16')
                    <label class="text-black" for="category"><strong class="text-black">Insuficiente sentido de pertenencia e inestabilidad: {{$item->result}}</strong> </label> 
                    <input  class="form-control btn-warning btn-radius" name="" style="text-align:left; width: 100%; color:white; background:
                    @if ($item->result < '4') #00b8d8 
                    @elseif  ( $item->result >= '4' && $item->result < '6' ) #17c671 
                    @elseif  ( $item->result >= '6' &&  $item->result < '8') #ffc107 
                    @elseif  ( $item->result >= '8' &&  $item->result < '10') #ffb400 
                    @elseif  ( $item->result >= '10') red 
                    @endif  
                        " id="" value="Nivel de Riesgo: @if ($item->result < '4') Nulo 
                    @elseif  ( $item->result >= '4' && $item->result < '6' ) Bajo 
                    @elseif  ( $item->result >= '6' &&  $item->result < '8') Medio 
                    @elseif  ( $item->result >= '8' &&  $item->result < '10') Alto 
                    @elseif  ( $item->result >= '10') MUY ALTO 
                    @endif           
                    "  disabled>           
                    @endif 
                    @empty                        
                    @endforelse
            
            </li> 
        </div>    
        <div class="col-sm-12" style="padding-top:2%">            
            <li class="list-group-item px-12">
            <h2>Cuestionario</h2>
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Pregunta</th>                
                        <th>Resultado</th>
                        <th>Valor</th>
                    
                    </thead>
                    <tbody>
                        @forelse ($preguntas as $item)
                        <tr>
                            <th>{{$item->item}}</th>
                            <td>{{$item->question}}</td>

                            @if($item->type == '1')
                                @if($item->answer == 0)
                                <td>Siempre</td>
                                @endif 
                                @if($item->answer == 1)
                                <td> Casi Siempre</td>
                                @endif 
                                @if($item->answer == 2)
                                <td>Algunas veces</td>
                                @endif 
                                @if($item->answer == 3)
                                <td>Casi nunca</td>
                                @endif 
                                @if($item->answer == 4)
                                <td>Nunca</td>
                                @endif 
                            @elseif($item->type == '2')
                                @if($item->answer == 4)
                                <td>Siempre</td>
                                @endif 
                                @if($item->answer == 3)
                                <td> Casi Siempre</td>
                                @endif 
                                @if($item->answer == 2)
                                <td>Algunas veces</td>
                                @endif 
                                @if($item->answer == 1)
                                <td>Casi nunca</td>
                                @endif 
                                @if($item->answer == 0)
                                <td>Nunca</td>
                                @endif 
                            @endif 
                            <td>{{$item->answer}}</td>  
                        </tr>
                        @empty
                            
                        @endforelse
                    </tbody>

                </table>

            </li>
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