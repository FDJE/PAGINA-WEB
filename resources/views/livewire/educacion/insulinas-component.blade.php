       <!-- Hot tours-->
        <section class="section section-sm bg-default" style="padding: 60px 0px 60px 0px">
            <div class="container" style="max-width: 968px">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown" style=" color:#EF8232">Insulina</span></h3>
            @foreach ($educations as $education)
                <div class="row row-sm row-40 row-md-50">
                    <div class="col-sm-6 col-md-12 wow fadeInRight">
                        <!-- Product Big-->
                        <article class="product-big">
                        <div class="parrafo">
                                        <img @if ($education->image_position == 0) style="float: right; margin-left: 30px;" @else style="float: left; margin-right: 30px;" @endif
                                            src="{{ asset('assets/images/fundacionImagenes/educacion/' . $education->image) }}"
                                            alt="{{ $education->title }}" width="400" />
                                        <h5 class="product-big-title texto-titulo">{{ $education->title }}</h5>
                                        <p>{!! $education->description !!}</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <!-- </div>
                </div> -->

            @endforeach
                    <!-- Why choose us-->
                        <div class="container" style="padding-top: 40px">
                            <div class="row  justify-content-center align-items-xl-center">
                                <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 35px">
                                    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown" style=" color:#EF8232">Basal: (de acción lenta)</span></h3>
                                    <!-- Bootstrap tabs-->
                                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                                        <!-- Nav tabs-->
                                        <ul class="nav nav-tabs">
                                        @foreach ($symptoms as $count => $symptom)
                                    <li class="nav-item" role="presentation">
                                        <a @if ($count == 0) class="nav-link active" @else class="nav-link" @endif
                                            href="#tabs-1-{{ $symptom->id }}"
                                            data-toggle="tab">{{ $symptom->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content texto-descripcion">
                                @foreach ($symptoms as $count => $symptom)
                                    <div @if ($count == 0) class="tab-pane fade show active" @else class="tab-pane fade" @endif
                                        id="tabs-1-{{ $symptom->id }}">
                                        <p>{!! $symptom->description !!}</p>
                                        <div class="contenedor1" style="padding: 20px" @if ($education->image) @endif>
                                            <a href="#">
                                                <figure>
                                                    <img src="{{ asset('assets/images/fundacionImagenes/educacion/' . $symptom->image) }}"
                                                        alt="" width="600" style="height: 366px;" />
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    <!-- Why choose us-->
                        <div class="container">
                            <div class="row  justify-content-center align-items-xl-center">
                                <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 35px">
                                    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown" style=" color:#EF8232">Bolo: (de acción rápida)</span></h3>
                                    <!-- Bootstrap tabs-->
                                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-5">
                                        <!-- Nav tabs-->
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item" role="presentation" style="padding-bottom: 10px"><a class="nav-link active" href="#tabs-5-1"
                                                    data-toggle="tab" style="text-align: left">ULTRARÁPIDA HUMAGOL(LISPTO) <br> NOVOLOG(ASPART) APIDRA(GLUSINA)</a>
                                            </li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-5-2"
                                                    data-toggle="tab">REGULAR HUMULIR, <br>NOVOLINR</a></li>

                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content texto-descripcion">
                                            <div class="tab-pane fade show active" id="tabs-5-1" style="color:#2F3A8E; font-weight: bold">
                                                <li>Inicio: 10 minutos</li>
                                                <li>Pico: 1-3 horas.</li>
                                                <li>Duración: 3-4 horas.</li>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-5-2" style="color:#2F3A8E; font-weight: bold">
                                                <li>Inicio: 30-60 minutos</li>
                                                <li>Pico: 2-4 horas.</li>
                                                <li>Duración: 5-8 horas.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contenedor1" style="padding: 20px">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('assets/images/fundacionImagenes/educacion/insulina2.png') }}" alt="" width="600" style="height: 366px;" />
                                        </figure>
                                    </a>
                               </div>
                            </div>
                        </div>
            </div>
        </section>
