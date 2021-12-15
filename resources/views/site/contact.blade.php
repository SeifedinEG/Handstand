@extends("layouts.html")

@section("content")
    
    @include("partials.nav")
    @include("partials.banner")

                        <form id="subscribe-form" action="{{ route('mail.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6" style="width:100%;display: flex; justify-content:center">
                                    <input type="text" placeholder="Name" name="name" style="width: 30%;">
                                    <input type="text" placeholder="Email" name="email" style="width: 30%; margin-left:30px">
                                </div>
                                <div class="col-sm-12" style="display: flex; justify-content:center; flex-direction:column; align-items:center">
                                    <input type="text" name="msg" placeholder="Subject"
                                        style="width: 95%; height:200px; margin-top:10px">
                                    <button id="mc-submit" style="background-color: green; color:white; border-radius:15px; width:75px; height:40px; margin-top:10px; margin-bottom:10px" type="submit">submit</button>

                                </div>
                                @if (session()->has('messageFooter'))
                                    <div class="alert alert-success">
                                        {{ session()->get('messageFooter') }}
                                    </div>

                                @endif
                            </div>
                        </form>
    @include("partials.footer")

@endsection