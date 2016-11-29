@extends('layouts.plantilla')
@section('titulo', 'Editar Persona')
@section('contenido')
    <h4 class="center">Editar Datos persona {{$persona->nombre}}</h4>
    <nav>
        <div class="nav-wrapper  lime accent-2">
            <div class="col s12">
                <a href="{{url('/')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('personas.index')}}" class="breadcrumb">Personas</a>
                <a href="{{route('personas.edit', $persona->id)}}" class="breadcrumb">Editar Detalles Persona</a>
            </div>
        </div>
    </nav>
    @include('partials.errores')
    <div class="row">
        <div class="offset-m3 col m6">
            <form action="{{route('personas.update', $persona->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
                <div class="input-field">
                    <input name="nombre" value="{{$persona->nombre}}" type="text" required class="validate">
                    <label for="last_name">Nombre</label>
                </div>
                <div class="input-field">
                    <input name="apellido" value="{{$persona->apellido}}" type="text" required class="validate">
                    <label for="last_name">Apellido</label>
                </div>
                <div class="input-field">
                    <input name="correo" value="{{$persona->correo}}"  type="email" required class="validate">
                    <label for="last_name">Correo</label>
                </div>
                <div class="input-field">
                    <input name="telefono" value="{{$persona->telefono}}"  type="number" required class="validate">
                    <label for="last_name">Teléfono</label>
                </div>
                <div class="input-field">
                    <input name="direccion" value="{{$persona->direccion}}" type="text" required class="validate">
                    <label for="last_name">Dirección</label>
                </div>
                <div class="input-field">
                    <input name="fecha_nacimiento" value="{{$persona->fecha_nacimiento}}" type="text" required class="validate">
                    <label for="last_name">Fecha de Nacimiento</label>
                </div>
                <div class="center">
                    <button type="submit" class="waves-effect waves-light btn">Editar Persona</button>
                    <a class="waves-effect waves-light btn red" href="{{route('personas.index')}}">Volver Atrás</a>
                </div>
            </form>
        </div>
    </div>
@endsection