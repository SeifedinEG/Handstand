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
    <form class="d-flex justify-content-center flex-column" action="{{route("classe.store")}}" method="post" enctype="multipart/form-data">
        @csrf
    <label for="">Image : </label>
    <input type="file" name="img" placeholder="img">
    <label for="">Name : </label>
    <input type="text" name="name" placeholder="name">
    <label for="">Schedule : </label>
    <input type="text" name="schedule" placeholder="schedule">
    <label for="">Trainer : </label>
    <select name="trainer_id">
        @foreach ($trainer as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <label for="">Catégorie : </label>
    <select name="categorie">
        <option value="mixte">Mixte</option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
    <button class="mx-auto btn btn-success" type="submit">Créer</button>
    </form>    
</div>
@endsection