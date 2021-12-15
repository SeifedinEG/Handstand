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
    <form class="d-flex flex-col justify-content-center" action="{{route("event.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="text" placeholder="text">
    <input type="text" name="date" placeholder="date">
    <input type="text" name="hour" placeholder="hour">
    <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection