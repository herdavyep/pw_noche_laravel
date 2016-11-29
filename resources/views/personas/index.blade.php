@extends('layouts.plantilla')
@section('titulo', 'Index Personas')
@section('contenido')
    <h4 class="center">Bienvenido a Personas</h4>
    <nav>
        <div class="nav-wrapper  lime accent-2">
            <div class="col s12">
                <a href="{{url('/')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('personas.index')}}" class="breadcrumb">Personas</a>
            </div>
        </div>
    </nav>
    @include('partials.mensajes')
    <a class="waves-effect waves-light btn" href="{{route('personas.create')}}">Crear Persona</a>
    <div class="row">
        <div class="offset-m1 col m10">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{$persona->nombre}}</td>
                        <td>{{$persona->apellido}}</td>
                        <td>{{$persona->correo}}</td>
                        <td class="center">
                            <a href="{{route('personas.show', $persona->id)}}" class="btn blue tooltipped" data-position="left" data-delay="50" data-tooltip="Ver"><i class="material-icons">search</i></a>
                            <a href="{{route('personas.edit', $persona->id)}}" class="btn yellow tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"><i class="material-icons">mode_edit</i></a>
                            <a href="{{url('personas/eliminar', $persona->id)}}" onclick="return confirm('Seguro que deseas eliminar este registro')" class="btn red tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @section('scripts')
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
                $('.tooltipped').tooltip({delay: 50});
            } );
        </script>
    @endsection
@endsection
