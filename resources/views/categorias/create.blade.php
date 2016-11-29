@extends('layouts.plantilla')
@section('titulo', 'Crear Persona')
@section('contenido')
    {!! Form::open(['route'=>'categorias.store','method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', null,['class' => 'form-control','placeholder' => 'Nombre de la categoria','required']) !!}
    
    </div>

    {!! Form::close() !!}


@endsection
