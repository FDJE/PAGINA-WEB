      <section class="section section-sm section-last bg-default" style="padding: 15px">
      <!-- SLIDER-->
      <div class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
        <div class="swiper-wrapper text-left">
          @foreach($sliders as $slider)
          <div class="swiper-slide context-dark" data-slide-bg="{{ asset('assets/images/home/sliders') }}/{{$slider->image}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </div>
      <!-- EVENTOS-->
        <div class="container" style="padding: 15px">
          <h3 class="texto-titulo">Eventos</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            @foreach($events as $event)
            <article class="quote-lisa" style="padding: 0px">
              <div class="col-sm-12 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="" href="{{ route('eventos.details', ['slug'=>$event->slug]) }}"><img src="{{ asset('assets/images/home/eventos') }}/{{$event->image}}" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="{{ route('eventos.details', ['slug'=>$event->slug]) }}">{{ $event->name }}</a></h5>
                        <p class="product-big-text">{!! $event->short_description !!}</p>
                        <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{ route('eventos.details', ['slug'=>$event->slug]) }}">Leer más...</a></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </article>
            @endforeach
          </div>
        </div>
      <hr style="border: 1px solid #f1ecec">
      <!-- NOTICIAS-->
        <div class="container" style="padding: 15px" >
          <h3 class="texto-titulo">Noticias</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            @foreach($notices as $notice)
            <article class="quote-lisa" style="padding: 0px">
              <div class="col-sm-12 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="{{ route('noticias.details', ['slug'=>$notice->slug]) }}">{{ $notice->name }}</a></h5>
                        <p class="product-big-text" style="color:#2F3A8E; font-size: 16px">{!! $notice->short_description !!}</p>
                        <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{ route('noticias.details', ['slug'=>$notice->slug]) }}">Leer más...</a></div>
                      </div>
                    </div>
                    <div class="unit-left"><a class="" href="{{ route('noticias.details', ['slug'=>$notice->slug]) }}"><img src="{{ asset('assets/images/home/noticias') }}/{{$notice->image}}" alt="" width="600" height="366"/></a></div>
                  </div>
                </article>
              </div>
            </article>
            @endforeach
          </div>
        </div>
      <hr style="border: 1px solid #f1ecec">
      <!-- PROYECTOS EDUCATIVOS-->
        <div class="container" style="padding: 15px">
          <h3 class="texto-titulo">Proyectos Educativos</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            @foreach($projects as $project)
            <article class="quote-lisa" style="padding: 0px">
              <div class="col-sm-12 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{ asset('assets/images/home/proyectos') }}/{{$project->image}}" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="#">{{ $project->name }}</a></h5>
                        <p class="product-big-text" style="color:#2F3A8E; font-size: 16px">{!! $project->short_description !!}</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </article>
            @endforeach
          </div>
        </div>
      <hr style="border: 1px solid #f1ecec">
      <!--	ALIANCES -->
        <div class="container" style="padding: 15px" >
          <h3 class="texto-titulo">Alianzas</h3>
            <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-xxl-items="4"  data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
                <!-- Thumbnail Classic-->
              @foreach($aliances as $aliance)
              <div class="owl-item">
                    <article class="thumbnail thumbnail-mary">
                      <div class="thumbnail-mary-figure">
                        <a href="{{$aliance->link}}" target="_blank">
                        <img src="{{ asset('assets/images/home/alianzas') }}/{{$aliance->image}}" alt="" width="420" height="308"/>

                        </a>
                      </div>
                    </article>
                    <div class="thumbnail-mary-description">
                      <h5 class="thumbnail-mary-project"><a href="{{$aliance->link}}" target="_blank">{{$aliance->name}}</a></h5><span class="thumbnail-mary-decor"></span>
                      <h5 class="thumbnail-mary-time">
                      </h5>
                    </div>
              </div>
              @endforeach
          </div>
      </div>
      </section>
