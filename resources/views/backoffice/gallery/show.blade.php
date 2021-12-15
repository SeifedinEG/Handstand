@extends("backoffice.partials.html")

@section("content")
    
<div class="d-flex mt-3 flex-column justify-content-center align-items-center">
    <h1>Numéro n°{{$gallery->id}}</h1>
    <img src="{{asset($gallery->img)}}" alt="" style="width: 200px">
    <br>
    <a class="btn btn-danger" href="{{route("gallery.index")}}">Retour</a>
</div>


@endsection