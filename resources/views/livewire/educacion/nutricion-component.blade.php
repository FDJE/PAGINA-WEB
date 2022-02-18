        <!-- Hot tours-->
        <section class="section section-sm bg-default" style="padding: 60px 0px 60px 0px">
            <div class="container" style="max-width: 968px">
                <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown" style=" color:#EF8232">Nutrición</span></h3>
            @foreach ($educations as $education)
                <div class="row row-sm  row-md-50">
                    <div class="col-sm-12 col-md-12 wow fadeInRight">
                        <!-- Product Big-->
                        <article class="product-big">
                        <div class="parrafo">
                                        <img @if ($education->image_position == 0) style="float: right; margin-left: 30px;" @else style="float: left; margin-right: 30px;" @endif
                                            src="{{ asset('assets/images/fundacionImagenes/educacion/' . $education->image) }}"
                                            alt="{{ $education->title }}" width="400" />
                                        <h5 class="product-big-title texto-titulo">{{ $education->title }}</h5>
                                        <p>{!! $education->description !!}</p>
                                    </div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInLeft">
            @endforeach
                       
        </section>
