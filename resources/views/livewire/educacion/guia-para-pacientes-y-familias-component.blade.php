<section class="section section-sm section-last bg-default" style="padding: 60px 0px 60px 0px">
    <div class="container" style="max-width: 968px">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown" style=" color:#EF8232">Guía para Pacientes
                y Familia</span></h3>
        <div class="row">
            @foreach ($educations as $education)
                <div class="col-sm-12 col-md-12 wow fadeInLeft">
                    <!-- Product Big-->
                    <article class="product-big">
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
        <!-- What people Say-->
        <div class="container texto-descripcion" style="max-width: 968px; padding-top: 0px">
            <h3 style=" color:#EF8232">Consejos importantes:</h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30"
                data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                @foreach ($consejos as $consejo)
                <article class="quote-lisa">
                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                src="{{ asset('assets/images/fundacionImagenes/educacion/'. $consejo->image) }}" alt=""
                                width="200" height="150" /></a>
                        <p class="quote-lisa-status" style="padding-top: 10px">{{$consejo->title}} </p>
                        <div class="quote-lisa-text">
                            <p class="q">{!! $consejo->description !!}</p>
                        </div>
                    </div>
                </article>
                @endforeach
            <!-- Quote Lisa-->


            </div>
        </div>
</section>
