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
               {{--  <!-- Quote Lisa-->
                <article class="quote-lisa">
                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                src="{{ asset('assets/images/fundacionImagenes/educacion/consejo2.png') }}" alt=""
                                width="200" height="150" /></a>
                        <p class="quote-lisa-status" style="padding-top: 10px">2. Nunca Dejar de Usar Insulina
                            Completamente
                        </p>
                        <div class="quote-lisa-text">
                            <p class="q">La dosis de insulina puede necesitar ser aumentada o disminuida
                                para
                                mantener un adecuado
                                metabolismo de la glucosa,
                                pero nunca se la debe omitir. Un error muy común es pensar que porque el niño no está
                                comiendo no debe
                                usar insulina,
                                esto aumenta el riesgo de una cetoacidosis.</p>
                        </div>
                    </div>
                </article>
                <!-- Quote Lisa-->
                <article class="quote-lisa">
                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                src="{{ asset('assets/images/fundacionImagenes/educacion/consejo3.png') }}" alt=""
                                width="200" height="150" /></a>
                        <p class="quote-lisa-status" style="padding-top: 10px">3.Cuánto hay Vómito en niños o
                            adolescentes
                            con DM1 se debe considerar.
                            Una carencia de insulina hasta que se pruebe lo contrario.</p>
                        <div class="quote-lisa-text">
                            <p class="q">Si existen episodios de hiperglucemia, cetoacidosis y vómito
                                recurrentes,
                                con o sin infección se debe pensar en que se está omitiendo la insulina, esto ocurre
                                seguido en la adolescencia y representa un problema psicosocial.
                            </p>
                        </div>
                    </div>
                </article>
                <!-- Quote Lisa-->
                <article class="quote-lisa">
                    <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                                src="{{ asset('assets/images/fundacionImagenes/educacion/consejo4.png') }}" alt=""
                                width="200" height="150" /></a>
                        <p class="quote-lisa-status" style="padding-top: 10px">4.Mantener Idratación</p>
                        <div class="quote-lisa-text">
                            <p class="q">Es esencial mantener la hidratación en cada niño con diabetes
                                durante
                                la enfermedad aguda;
                                líquidos con o sin azúcar
                                deben ser proporcionados de acuerdo a los niveles de azúcar en sangre. Considere la
                                utilización de
                                hidratación intravenosa en el
                                caso que el niño no pueda tomar nada.
                            </p>
                        </div>
                    </div>
                </article> --}}
            </div>
        </div>
</section>
