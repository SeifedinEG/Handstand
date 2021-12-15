@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="mt-2 d-flex justify-content-center align-items-center h-25">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            @if (Storage::disk('public')->exists('img/' . $logo->img))
            <img src="{{ asset('img/' . $logo->img) }}" width="200px"></td>
              @else
            <img src="{{ asset($logo->img) }}" alt=""></td>
              @endif
          <a href="{{route("logo.edit", $logo->id)}}" class="btn btn-success m">Edit</a>
        </div>
      </div>

</div>

    
@endsection