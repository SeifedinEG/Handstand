@extends("backoffice.partials.html")

@section("content")
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="mt-2 d-flex justify-content-center align-items-center h-25">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$about->title}}</h5>
          <p class="card-text">{{$about->text}}</p>
          <p class="card-text">{{$about->text2}}</p>
          <p class="card-text"><i>{{$about->video}}</i></p>
          @if (Storage::disk('public')->exists('img/' . $about->img))
                            <img class="w-50" src="{{ asset('img/' . $about->img) }}" alt=""></td>
                              @else
                            <img class="w-50" src="{{ asset($about->img) }}" alt=""></td>
                              @endif</a>
        </div>
        <div class="d-flex justify-content-center align-items-center">
         <a href="{{route("about.edit", $about->id)}}" class="w-25 btn btn-success">Edit</a>
        </div>

      </div>

</div>

@endsection