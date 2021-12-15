<div class="slider-area">	
    <div class="slider-wrapper">
        @foreach ($backgrounds as $item)
            @if ($item ->place == 1)
                    @if (Storage::disk('public')->exists('img/' . $item->img))
                    <div class="single-slide" style="background-image: url('{{'img/' . $item->img}}');">
                @else
                    <div class="single-slide" style="background-image: url('{{$item->img}}');">
            @endif               
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{$item->title}}</h5>
                                    <h1>{{$item->subtitle}}</h1>
                                    <p>{{$item->text}}</p>
                                    <a class="banner-btn" href="gallery.html" data-text="read more"><span>read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endif
        @endforeach
        @foreach ($backgrounds as $item)
       @if ($item ->place == 0)
            @if (Storage::disk('public')->exists('img/' . $item->img))
            <div class="single-slide" style="background-image: url('{{'img/' . $item->img}}');">
        @else
            <div class="single-slide" style="background-image: url('{{$item->img}}');">
        @endif   
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                        <div class="text-content-wrapper">
                            <div class="text-content text-left">
                                <h5>{{$item->title}}</h5>
                                <h1>{{$item->subtitle}}</h1>
                                <p>{{$item->text}}</p>
                                <a class="banner-btn" href="gallery.html" data-text="read more"><span>read more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        </div>
           @endif
        @endforeach
    </div>
</div>