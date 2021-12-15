<div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[2]->title}}</h2>
                    <p>{{$titres[2]->subtitle}}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    @if (Storage::disk('public')->exists('img/' . $trainers3[0]->img))
                        <img src="{{ asset('img/' . $trainers3[0]->img) }}" alt=""></td>
                        @else
                        <img src="{{ asset($trainers3[0]->img) }}" alt=""></td>
                        @endif
                    <div class="trainer-hover">
                        <h3>{{$trainers3[0]->name}}
                        @if ($trainers3[0]->type == 1)
                            (Leadcoach)
                        @endif</h3>
                        <ul>
                            <li><a href="{{$trainers3[0]->url1}}"><i class="fa fa-facebook"></i></a></li>  
                            <li><a href="{{$trainers3[0]->url2}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$trainers3[0]->url3}}"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="{{$trainers3[0]->url4}}"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @foreach ($trainers as $item)
            @if ($item->type == 1)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-trainer text-center">
                        @if (Storage::disk('public')->exists('img/' . $item->img))
                            <img src="{{ asset('img/' . $item->img) }}" alt=""></td>
                            @else
                            <img src="{{ asset($item->img) }}" alt=""></td>
                            @endif
                        <div class="trainer-hover">
                            <h3>{{$item->name}}
                            @if ($item->type == 1)
                                (Leadcoach)
                            @endif</h3>
                            <ul>
                                <li><a href="{{$item->url1}}"><i class="fa fa-facebook"></i></a></li>  
                                <li><a href="{{$item->url2}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$item->url3}}"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="{{$item->url4}}"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    @if (Storage::disk('public')->exists('img/' . $trainers2[0]->img))
                        <img src="{{ asset('img/' . $trainers2[0]->img) }}" alt=""></td>
                        @else
                        <img src="{{ asset($trainers2[0]->img) }}" alt=""></td>
                        @endif
                    <div class="trainer-hover">
                        <h3>{{$trainers2[0]->name}}
                        @if ($trainers2[0]->type == 1)
                            (Leadcoach)
                        @endif</h3>
                        <ul>
                            <li><a href="{{$trainers2[0]->url1}}"><i class="fa fa-facebook"></i></a></li>  
                            <li><a href="{{$trainers2[0]->url2}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$trainers2[0]->url3}}"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="{{$trainers2[0]->url4}}"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>