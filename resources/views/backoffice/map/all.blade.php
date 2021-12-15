@extends("backoffice.partials.html")


@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    <section class="d-flex justify-content-center mt-5">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">{{$map->type}}</p>
              <p class="card-text">{{$map->nom}}</p>
              <p class="card-text">{{$map->numero}}</p>
              <p class="card-text">{{$map->ville}}</p>
              <div class="d-flex justify-content-center">
                <a href="{{route("map.edit", $map->id)}}" class="btn btn-success">Edit</a>
              </div>
            </div>
          </div>

    </section>

@endsection