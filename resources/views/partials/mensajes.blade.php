@if(Session::has('eliminado'))
    <div class="danger">
        {!!  Session::get('eliminado') !!}
    </div>
@endif
@if(Session::has('creado'))
    <div class="success">
        {!!  Session::get('creado') !!}
    </div>
@endif
@if(Session::has('actualizado'))
    <div class="info">
        {!!  Session::get('actualizado') !!}
    </div>
@endif