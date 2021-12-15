<section class="client-area pt-95 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[6]->title}}</h2>
                    <p>{{$titres[6]->subtitle}}</p>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="testimonial-owl">
                        @foreach ($testimonials as $item )
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>{{$item->text}} </p>
                                <h2 class="text-center">{{$item->name}}</h2>
                                <br>
                                <h6>{{$item->job}}</h6>
                            </div>    
                        </div> 
                        @endforeach
                    </div> 
                </div>   
            </div>
        </div>
    </div>
</section>