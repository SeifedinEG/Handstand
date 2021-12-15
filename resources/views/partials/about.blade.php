<section class="about-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                @foreach ($about as $item)
                <div class="about-content">
                    <h2>{{$item->name}}</h2>
                    <p class="m-0">{{$item->text}}</p>
                    <p>{{$item->text2}}</p>
                     <a class="banner-btn" href="about-us.html" data-text="read more"><span>read more</span></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-video active">
                     <div class="game">
                         <a href="#">@if (Storage::disk('public')->exists('img/' . $item->img))
                            <img src="{{ asset('img/' . $item->img) }}" alt=""></td>
                              @else
                            <img src="{{ asset($item->img) }}" alt=""></td>
                              @endif</a>
                     </div> 
                     <div class="video-icon video-hover">
                         <a class="video-popup" href="{{$item->video}}">
                             <i class="zmdi zmdi-play"></i>
                         </a>
                     </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
 </section>