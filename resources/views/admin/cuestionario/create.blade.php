@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       
        <div class="col-sm-10"> 
        <h4 class="text-center">NUEVA PREGUNTA</h4>
        {!! Form::open(['route'=>['cuestionario.store'],'method'=>'POST','files'=>true]) !!}
        
        <a href="{{route('cuestionario.index')}}" class="btn-sm btn-success">Regresar</a>
            <div class="jumbotron">
                <div class="form-group">
                    <label for="question">PREGUNTA</label>
                    {!! Form::text('question',null,['class'=>'form-control','maxlength'=>'200']) !!}
                </div>
                <div class="form-group">
                    <label for="section">SECTION</label>
                    {!! Form::text('section',null ,['class'=>'form-control','maxlength'=>'200','rows'=>'3']) !!}
                </div>
                <div class="form-group">
                    <label for="item">ITEM</label>
                    {!! Form::text('item',null ,['class'=>'form-control','maxlength'=>'200','rows'=>'3']) !!}
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