<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <div class="container" style="padding: 60px 0px 60px 0px;">
            <div class="panel-heading" style="padding-bottom: 10px;">
                <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                        <h4>Editar Educación</h4>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <a class="button button-secondary button-pipaluk"
                            href="{{ route('admin.educacion') }}">Regresar</a>
                    </div>
                </div>
            </div>
            <form class="rd-form rd-form-variant-2 rd-mailform formulario-actualizar" wire:submit.prevent="updateEvent">
                <div class="row row-14 gutters-14">
                    <div class="col-md-6">
                        @error('title')
                            <p class="text-danger" style="color: red; font-size: 11px;">El Título es requerido</p>
                        @enderror
                        <div class="form-wrap">
                            <input class="form-input" placeholder="Título*" type="text" name="title"
                                data-constraints="@Required" wire:model="title">
                            <label class="form-label"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <strong>Categoria:</strong>
                        <select class="form-control" wire:model="category">
                            <option value="">-- Seleccione la categoria --</option>
                            @foreach ($options as $key => $option)
                                <option value="{{ $key }}">{{ $option }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-danger" style="color: red; font-size: 11px;">La descripción corta es requerida
                            </p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <strong>Posicion imagen:</strong>
                        <select class="form-control" wire:model="image_position">
                            <option value="">-- Seleccione --</option>
                            <option value="0">Derecha</option>
                            <option value="1">Izquierda</option>
                        </select>
                        @error('image_position')
                            <p class="text-danger" style="color: red; font-size: 11px;">La descripción corta es requerida
                            </p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <strong>Tipo:</strong>
                        <select class="form-control" wire:model="type">
                            <option value="">-- Seleccione --</option>
                            <option value="0">Descripcion</option>
                            <option value="1">Sintomas y Signos</option>
                            <option value="2">Consejos</option>
                        </select>
                        @error('type')
                            <p class="text-danger" style="color: red; font-size: 11px;">La descripción corta es requerida
                            </p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <strong>Estado:</strong>
                        <select class="form-control" style="width: auto;" wire:model="status">
                            <option value="">-- Seleccione --</option>
                            <option value="0">Desactivar</option>
                            <option value="1">Activar</option>
                        </select>
                        @error('status')
                            <p class="text-danger" style="color: red; font-size: 11px;">La descripción corta es requerida
                            </p>
                        @enderror
                    </div>
                    <div class="col-8">
                        <strong>Descripción:</strong>
                        <div class="form-wrap" wire:ignore>
                            <label class="form-label"></label>
                            <textarea class="form-input textarea-lg" id="description" placeholder="Descripción Larga*"
                                name="message" data-constraints="@Required" wire:model="description"></textarea>
                        </div>
                        @error('description')
                            <p class="text-danger" style="color: red; font-size: 11px;">La descripción Larga es requerida
                            </p>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-4 control-label" style="padding: 7px;"></label>
                        <strong>Imagen:</strong>

                        <input type="file" class="input-file" wire:model="newimage" />
                        @if ($newimage)
                            <img src="{{ $newimage->temporaryUrl() }}" width="200">
                        @else
                            <img src="{{ asset('assets/images/fundacionImagenes/educacion') }}/{{ $image }}" width="200">
                        @endif
                        @error('newimage')
                            <p class="text-danger" style="color: red; font-size: 11px;">La Imagen es requerida</p>
                        @enderror
                    </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Actualizar</button>
            </form>
        </div>
</section>
@push('scripts')
    <script>
        $(function() {
            tinymce.init({
                selector: '#description',
                height: "280",
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data);
                    })
                }
            });
        });
    </script>
@endpush
