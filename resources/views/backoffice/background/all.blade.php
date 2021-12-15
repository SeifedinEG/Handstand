@extends("backoffice.partials.html")

@section("content")
@if (session()->has('messageD'))
<div class="alert alert-danger">
    {{ session()->get('messageD') }}
</div>
@endif

@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>

@endif
<div class="mt-4 d-flex justify-content-center">
  <a class="btn btn-success" href="{{route("background.create")}}">Add + </a>
</div>
<div class="mt-2 d-flex justify-content-center align-items-center">
  
    @foreach ($background as $item)
    <div class="card ml-3" style="width: 18rem;">
        <div class="card-body">
          @if (Storage::disk('public')->exists('img/' . $item->img)) 
          <img src="{{asset('img/' . $item->img)}}" alt="" style="width: 200px">  
          @else
          <img src="{{ asset($item->img) }}" style="width: 200px" alt="">
          @endif
        <p class="card-text mt-1">{{$item->text}}</p>
        <p class="card-text mt-1">{{$item->title}}</p>

        <p class="card-text mt-1">{{$item->subtitle}}</p>

        <p class="card-text mt-1"><i>{{$item->place}}</i></p>
          <a href="{{route("background.edit", $item->id)}}" class="btn btn-success">Edit</a>
          <form action="{{route("background.destroy", $item->id)}}" method="POST">
            @method('delete')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </div>
      </div>
      @endforeach

</div>
    

@endsection