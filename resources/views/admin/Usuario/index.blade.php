@extends('layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <li class="list-group-item px-12">            
            <label for="browser">Filtrar por compañia:</label>
            <select id="selectCategory">
            <option value="">Todas</option>
            @forelse ($companias as $item)
                <option value="{{$item->id}}">{{$item->company_name}}</option>                
            @empty                          
            @endforelse
            </select>  
            </li>

            <li class="list-group-item px-12" style="padding-top:2%">
                <table id="tablausuarios" class="table table-striped">
                    <thead>
                    
                        <th>Nombre</th>                
                        <th>Email</th>
                        <th>Compañia</th>
                        <th>Posición</th> 
                        <th>completado</th>                    
                        <th>Cuestionario</th>
                    </thead>
                    <tbody>
                        @forelse ($usuario as $item)
                        <tr class="{{$item->company_id}}" >
                            <td>{{$item->fullName}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->company_id}}</td>
                            <td>{{$item->position_id}}</td>
                            @if ( $item->completed == '1')
                            <td>SI</td>
                            @endif
                            @if ( $item->completed == '0')
                            <td>NO</td>
                            @endif
                            @if ( $item->completed == '1')
                            <td>
                                                        
                                <a href="{{ route('usuario.edit',$item->id)}}" class="btn btn-primary">Nom035</a>
                            
                            </td>
                            @endif
                        </tr>
                        @empty
                            
                        @endforelse
                    </tbody>

                </table>
            </li>
        </div>
    </div>
</div>
</div>
<script>


$(function(){
	var $tabla = $('#tablausuarios');
	
	$('#selectCategory').change(function(){
		var value = $(this).val();
		if (value){
			$('tbody tr.' + value, $tabla).show();
			$('tbody tr:not(.' + value + ')', $tabla).hide();
		}
		else{
			// Se ha seleccionado All
			$('tbody tr', $tabla).show();
		}
	});
});
</script>
@endsection
