<div>
  <style>
    nav svg{
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }
</style>
  <div class="container" style="padding: 60px 0px 0px 0px;">
    <div class="panel-heading" style="padding-bottom: 10px;">
      <div class="row">
          <div class="col-md-6" style="text-align: left;">
            <h4>Todos los Eventos</h4>
          </div>
          <div class="col-md-6" style="text-align: right;">
            <a class="button button-secondary button-pipaluk" href="{{ route('admin.addevent') }}">Añadir Nuevo Evento</a>
          </div>
      </div>
    </div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert" style="background-color: #cbefcd;">{{Session::get('message')}}</div>
    @endif
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Imagen</th>
          <th scope="col">Título</th>
          <th scope="col">Estado</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($events as $event)
        <tr>
          <td><img src="{{ asset('assets/images/home/eventos') }}/{{$event->image}}" width="100"></td>
          <td>{{$event->name}}</td>
          <td>
            @if ($event->status == '1')
              Activado
            @else
              Desactivado
            @endif
          </td>
          <td style="font-size: 10px;">
            <a href="{{route('admin.editevent',['eventos_slug'=>$event->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
            <a onclick="confirm('Estas seguro, Quieres eliminar este evento?') || event.stopImmediatePropagation()" wire:click.prevent="deleteEvent({{$event->id}})" style="margin-left: 10px; color:red"><i class="fa fa-times fa-2x text-danger"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$events->links()}}
    <br><br><br><br>
  </div>
</div>