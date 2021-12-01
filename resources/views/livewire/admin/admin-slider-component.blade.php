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
            <h4>Todos los Slider</h4>
          </div>
          <div class="col-md-6" style="text-align: right;">
            <a class="button button-secondary button-pipaluk" href="{{ route('admin.addslider') }}">Añadir Nuevo Slider</a>
          </div>
      </div>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Imagen</th>
          <th scope="col">Estado</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sliders as $slider)
        <tr>
          <td class="col-md-4"><img src="{{ asset('assets/images/home/sliders') }}/{{$slider->image}}" width="100"></td>
          <td class="col-md-4">
            @if ($slider->status == '1')
              Activado
            @else
              Desactivado
            @endif
          </td>
          <td class="col-md-4">
            <a href="{{route('admin.editslider',['sliders_image'=>$slider->image])}}"><i class="fa fa-edit fa-2x"></i></a>
            <a onclick="eliminar()" wire:click.prevent="deleteSlider({{$slider->id}})" style=" color:red"><i class="fa fa-times fa-2x text-danger"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{$sliders->links()}}
    <br><br><br><br>
  </div>
</div>