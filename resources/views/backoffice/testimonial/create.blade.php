@extends("backoffice.partials.html")

@section("content")
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="mt-5" style="display: flex; justify-content: center;">
    <form class="d-flex justify-content-center" action="{{route("testimonial.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="job" placeholder="job">
    <input type="text" name="text" placeholder="text">

    <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection