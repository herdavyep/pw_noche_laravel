@extends('layouts.plantilla')
@section('titulo', 'Crear Persona')
@section('contenido')
    <h1 class="center">Crear Nueva Persona</h1>
    <nav>
        <div class="nav-wrapper  lime accent-2">
            <div class="col s12">
                <a href="{{url('/')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('personas.index')}}" class="breadcrumb">Personas</a>
                <a href="{{route('personas.create')}}" class="breadcrumb">Crear Personas</a>
            </div>
        </div>
    </nav>
    @include('partials.errores')
    <div class="row">
        <div class="offset-m3 col m6">
            <form action="{{route('personas.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="input-field">
                    <input name="nombre" value="{{old('nombre')}}" type="text" required class="validate">
                    <label for="last_name">Nombre</label>
                </div>
                <div class="input-field">
                    <input name="apellido" value="{{old('apellido')}}" type="text" required class="validate">
                    <label for="last_name">Apellido</label>
                </div>
                <div class="input-field">
                    <input name="correo" value="{{old('correo')}}" type="email" required class="validate">
                    <label for="last_name">Correo</label>
                </div>
                <div class="input-field">
                    <input name="telefono" value="{{old('telefono')}}" type="number" required class="validate">
                    <label for="last_name">Teléfono</label>
                </div>
                <div class="input-field">
                    <input name="direccion" value="{{old('direccion')}}" type="text" required class="validate">
                    <label for="last_name">Dirección</label>
                </div>
                <div class="input-field">
                    <input name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" type="text" required class="validate">
                    <label for="last_name">Fecha de Nacimiento</label>
                </div>
                <div class="center">
                    <button type="submit" class="waves-effect waves-light btn">Crear Persona</button>
                    <a class="waves-effect waves-light btn red" href="{{route('personas.index')}}">Volver Atrás</a>
                </div>
            </form>
        </div>
    </div>
@endsection