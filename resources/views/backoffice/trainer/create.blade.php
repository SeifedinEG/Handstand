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
    <form class="d-flex justify-content-center flex-column" action="{{route("gallery.store")}}" method="post" enctype="multipart/form-data">
            @csrf
        <label for="">Name : </label>
        <input type="text" name="name" placeholder="Name">
        <label for="">Image : </label>
        <input type="file" name="img" placeholder="img">
        <label for="">Facebook : </label>
        <input type="text" name="url1" placeholder="Facebook">
        <label for="">Twitter : </label>
        <input type="text" name="url2" placeholder="Twitter">
        <label for="">Dribbble : </label>
        <input type="text" name="url3" placeholder="Dribbble">
        <label for="">Pinterest : </label>
        <input type="text" name="url4" placeholder="Pinterest">
        <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection