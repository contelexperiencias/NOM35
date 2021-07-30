@extends('layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
<div class="container">
    <div class="row">
      
        <div class="col-sm-10">
            <a href="{{route('cuestionario.create')}}" class="btn btn-success">NUEVO</a>
            <table class="table table-striped">
                <thead>
                <th>id</th>
                    <th>Pregunta</th>                
                    <th>Section</th>
                    <th>Item</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @forelse ($cuestionario as $item)
                    <tr>
                    <td>{{$item->id}}</td>
                        <td>{{$item->question}}</td>
                        <td>{{$item->section}}</td>
                        <td>{{$item->item}}</td>
                        <td>
                           
                            <a href="{{ route('cuestionario.edit',$item->id)}}" class="btn btn-primary">EDITAR</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['cuestionario.destroy',$item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('ELIMINAR',['class'=>'btn btn-danger','onclick'=>'return confirm("ESTA SEGURO DE ELIMINAR")']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
@endsection
