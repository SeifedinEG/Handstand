@extends("backoffice.partials.html")

@section("content")
    
<div class="d-flex mt-3 flex-column justify-content-center align-items-center">
    <div class="card d-flex flex-column justify-content-center align-items-center">
        <p class="mt-3">{{$trainer->name}}</p>
        <img src="{{asset($trainer->img)}}" alt="" style="width: 200px">
        <p>{{$trainer->url1}}</p>
        <p>{{$trainer->url2}}</p>
        <p>{{$trainer->url3}}</p>
        <p>{{$trainer->url4}}</p>
        <br>
    </div>
   
    <a class="btn btn-danger" href="{{route("trainer.index")}}">Retour</a>
</div>


@endsection