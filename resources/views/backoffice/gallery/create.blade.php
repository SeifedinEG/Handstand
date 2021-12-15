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
    <form class="d-flex justify-content-center" action="{{route("gallery.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="img" placeholder="img">
    <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection