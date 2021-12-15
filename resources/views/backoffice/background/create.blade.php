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
<div class="mt-5" style="display: flex; justify-content: center; flex-direction:column; align-items:center;">
    <form class="d-flex justify-content-center flex-column align-items-center" action="{{route("background.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <label for="">Text : </label>
    <input type="text" name="text" placeholder="text">
    <br>
    <label for="">Image : </label>
    <input type="file" name="img" placeholder="img">
    <br>
    <label for="">Title :</label>
    <input type="text" name="title" placeholder="title">
    <br>
    <label for="">Subtitle :</label>
    <input type="text" name="subtitle" placeholder="subtitle">
    <br>
    <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection