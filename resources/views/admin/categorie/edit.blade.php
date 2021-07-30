@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
   
        <div class="col-sm-10">
        <h4 class="text-center">EDITAR LA CATEGORÍA {{$categoria->category}}</h4>
        <a href="{{route('categorie.index')}}" class="btn-sm btn-success">Regresar</a>

            {!! Form::open(['route'=>['categorie.update',$categoria],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="category">Categoria</label>
                    {!! Form::text('category',$categoria->category,['class'=>'form-control','maxlength'=>'200']) !!}
                </div>
                <div class="form-group">
                    <label for="category_values">INGRESE VALORES</label>
                    {!! Form::text('category_values',$categoria->category_values,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>            

            </div>
           
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    // CKEDITOR.replace( 'descripcion' );
</script>
@endsection