@extends("backoffice.partials.html")


@section("content")
    
    <section class="d-flex justify-content-center mt-5">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">{{$footer->text}}</p>
              <p class="card-text">{{$footer->email}}</p>
              <p class="card-text">{{$footer->number}}</p>
              <p class="card-text">{{$footer->adresse}}</p>
              <div class="d-flex justify-content-center">
                <a href="{{route("footer.edit", $footer->id)}}" class="btn btn-success">Edit</a>
              </div>
            </div>
          </div>

    </section>

@endsection