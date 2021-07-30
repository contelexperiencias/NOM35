@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       
        <div class="col-sm-10"> 
        <h4 class="text-center">CREAR CATEGORÍA</h4>
        {!! Form::open(['route'=>['categorie.store'],'method'=>'POST','files'=>true]) !!}
        
        <a href="{{route('categorie.index')}}" class="btn-sm btn-success">Regresar</a>
            <div class="jumbotron">
                <div class="form-group">
                    <label for="category">INGRESE CATEGORIA</label>
                    {!! Form::text('category',null,['class'=>'form-control','maxlength'=>'200']) !!}
                </div>
                <div class="form-group">
                    <label for="category_values">INGRESE VALORES</label>
                    {!! Form::text('category_values',null ,['class'=>'form-control','maxlength'=>'200','rows'=>'3']) !!}
                </div>

                
                {!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
                {!! Form::close() !!}

            </div>
           
        </div>
    </div>
</div>
<script>
    // CKEDITOR.replace( 'descripcion' );
</script>
@endsection