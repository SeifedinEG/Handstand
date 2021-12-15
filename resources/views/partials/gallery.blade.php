<section class="gallery-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="test-content">
                    <div class="section-title text-center">
                        <h2>{{$titres[3]->title}}</h2>
                        <p>{{$titres[3]->subtitle}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid" style="position: relative; height: 390px;">
               @foreach ($galleries as $item)
               <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 50%; top: 210px;">
                <div class="portfolio-img single-img">
                    @if (Storage::disk('public')->exists('img/' . $item->img))
                        <img src="{{ asset('img/' . $item->img) }}" alt=""></td>
                          @else
                        <img src="{{ asset($item->img) }}" alt=""></td>
                          @endif
                    <div class="gallery-icon">
                            @if (Storage::disk('public')->exists('img/' . $item->img))
                            <a class="image-popup" href="{{ asset('img/' . $item->img) }}"> <i class="zmdi zmdi-zoom-in"></i>
                            </a>
                              @else
                            <a class="image-popup" href="{{ asset($item->img) }}"><i class="zmdi zmdi-zoom-in"></i>
                            </a>
                              @endif
                    </div>
                </div>
            </div>
               @endforeach
              
            </div>
        </div>
    </div>
</section> 