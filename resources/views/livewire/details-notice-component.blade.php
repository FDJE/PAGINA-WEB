      <!--Notice-->
      <section class="section section-lg section-inset-1 position-relative index-1">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-12 col-lg-12 wow fadeInUp">
              <h3>{{ $notice->name }}</h3><img src="{{ asset('assets/images/home/noticias') }}/{{$notice->image}}" alt="" width="370" height="108"/>
              <p style="text-align: justify;">{!! $notice->description !!}</p><a class="button button-primary" href="/">Regresar</a>
            </div>
          </div>
        </div>
      </section>