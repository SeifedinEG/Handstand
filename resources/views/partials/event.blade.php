<section class="event-area pt-95 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[4]->title}}</h2>
                    <p>{{$titres[4]->subtitle}}</p>
                </div>
                <div class="event-wrapper">
                    @foreach ($events as $item)
                    @if ($item->place == 1)
                        
                    <div class="event-content text-center">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->text}}</p>
                        <h4>{{$item->date}}</h4>
                        <h5>{{$item->hour}}</h5>
                    </div>   
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>