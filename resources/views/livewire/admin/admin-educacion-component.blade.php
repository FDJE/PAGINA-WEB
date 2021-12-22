<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

    </style>
    <div class="container" style="padding: 60px 0px 0px 0px;">
        <div class="panel-heading" style="padding-bottom: 10px;">
            <div class="row">
                <div class="col-md-4" style="text-align: left;">
                    <select class="form-control" wire:model="category">
                        <option value="">-- Seleccione la categoria --</option>
                        @foreach ($options as $key => $option)
                            <option value="{{ $key }}">{{ $option }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4" style="text-align: left;">
                    <select class="form-control" wire:model="type">
                        <option value="">-- Seleccione el tipo --</option>
                        @foreach ($types as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4" style="text-align: right;">
                    <a class="btn btn-primary" href="{{ route('admin.addedu') }}">Añadir
                        Nuevo</a>
                </div>
            </div>
        </div>
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th style="padding: 0.45rem;" scope="col">Imagen</th>
                        <th style="padding: 0.45rem;" scope="col">Título</th>
                        <th style="padding: 0.45rem;" scope="col">Estado</th>
                        <th style="padding: 0.45rem;" scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($educations as $education)
                        <tr>
                            <td style="padding: 0.45rem;"><img
                                    src="{{ asset('assets/images/fundacionImagenes/educacion') }}/{{ $education->image }}"
                                    width="100"></td>
                            <td style="padding: 0.45rem;">{{ $education->title }}</td>
                            <td style="padding: 0.45rem;">
                                @if ($education->status == '1')
                                    Activado
                                @else
                                    Desactivado
                                @endif
                            </td>
                            <td style="font-size: 10px;padding: 0.45rem;">
                                <a href="{{ route('admin.editedu', ['eventos_slug' => $education->id]) }}"><i
                                    class="fa fa-edit fa-2x"></i></a>
                                <a onclick="eliminar()" wire:click.prevent="deleteEducation({{ $education->id }})"
                                    style="margin-left: 10px; color:red"><i
                                        class="fa fa-times fa-2x text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $educations->links() }}
            <br><br><br><br>

        </div>

    </div>
</div>
