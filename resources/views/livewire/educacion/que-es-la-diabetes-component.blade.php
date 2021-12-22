    <!-- Hot tours-->
    <section class="section section-sm bg-default" style="padding: 60px 0px 60px 0px">
        <div class="container" style="max-width: 968px">
            <h3 class="texto-titulo"><span class="d-inline-block wow slideInDown">Información</span></h3>
            <div class="row row-sm row-40 row-md-50">
                @foreach ($educations as $education)
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <!-- Product Big-->
                        <article class="product-big" style="padding-bottom: 0px; min-height: 0vh">
                            <div class="unit flex-column flex-md-row align-items-md-stretch">
                                <div class="unit-body texto-descripcion">
                                    <div class="product-big-body">
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
                    </div>
                @endforeach
            </div>
            <!-- Why choose us-->
            <div class="container" style="padding-top: 40px">
                <div class="row  justify-content-center align-items-xl-center">
                    <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 35px">
                        <h3 class="texto-titulo"><span class="d-inline-block wow slideInDown">Sintomas y Signos</h3>

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
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>