@extends('layouts.app')

@section('content')
<div class="page-header row no-gutters py-4">
<div class="container">
    <div class="row">
      
        <div class="col-sm-10">
            <a href="{{route('categorie.create')}}" class="btn btn-success">NUEVO</a>
            <table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>Nombre</th>                
                    <th>valores</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @forelse ($categories as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->category_values}}</td>
                        <td>
                           
                            <a href="{{ route('categorie.edit',$item->id)}}" class="btn btn-success">EDITAR</a>
                            {!! Form::open(['method'=>'DELETE','route'=>['categorie.destroy',$item->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('ELIMINAR',['class'=>'btn btn-success','onclick'=>'return confirm("ESTA SEGURO DE ELIMINAR")']) !!}
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
