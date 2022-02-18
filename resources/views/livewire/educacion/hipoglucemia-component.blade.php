@foreach ($educations as $education)
@endforeach
       <!-- Why choose us-->
        <section class="section section-sm section-first bg-default text-md-left" style="padding: 60px 0px 60px 0px">
            <div class="container" style="max-width: 968px">
                <div class="row justify-content-center align-items-xl-center">
                    <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 35px">
                        <h3 style=" color:#EF8232">Hipoglucemia</h3>
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
        </section>

    
