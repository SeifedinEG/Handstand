<div class="pricing-area pt-95 pb-120 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2>{{$titres[5]->title}}</h2>
                    <p>{{$titres[5]->subtitle}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($pricing as $item )
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$item->name}} package</h2>
                        <h1>${{$item->price}}<span>/month</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                           <li>{{$item->text1}}</li>
                           <li>{{$item->text2}}</li>
                           <li>{{$item->text3}}</li>
                           <li>{{$item->text4}}</li>
                        </ul>
                        @if (Auth::user())
                        <a href="#">get started</a>
                        @else
                        <a href="/login">get started</a>
                        @endif
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </div>
</div>