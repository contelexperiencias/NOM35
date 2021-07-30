@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
   
        <div class="col-sm-10">
        <h4 class="text-center">EDITAR PREGUNTA</h4>
        <a href="{{route('cuestionario.index')}}" class="btn-sm btn-success">Regresar</a>

            {!! Form::open(['route'=>['cuestionario.update',$cuestionario],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="question">PREGUNTA</label>
                    {!! Form::text('question',$cuestionario->question,['class'=>'form-control','maxlength'=>'200']) !!}
                </div>
                <div class="form-group">
                    <label for="section">SECTION</label>
                    {!! Form::text('section',$cuestionario->section,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
                <div class="form-group">
                    <label for="item">ITEM</label>
                    {!! Form::text('item',$cuestionario->item,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
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