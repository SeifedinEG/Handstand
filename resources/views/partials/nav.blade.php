<header class="top">
    <div class="header-area ptb-18 header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <div class="logo">

                        <a href="/">  
                                @if (Storage::disk('public')->exists('img/' . $logo[0]->img))
                            <img src="{{ asset('img/' . $logo[0]->img) }}" width="100px"></td>
                                @else
                            <img src="{{ asset($logo[0]->img) }}" width="100px"></td>
                                @endif
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="content-wrapper">
                        <!-- Main Menu Start -->
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    @foreach ($navitems as $item)
                                    <li><a href="{{$item->url}}">{{$item->name}}</a></li>
                                    @endforeach 
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="header-contact text-right">
                        <a class="banner-btn" data-text="go" href="/back"><span>Dashboard</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>