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
<div class="mt-4">
<form enctype="multipart/form-data" action="{{route("classe.update", $classe->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="d-flex justify-content-center flex-column w-100 align-items-center">
        <label for="">Image : </label>
    <input type="file" name="img" value="{{$classe->schedule}}" placeholder="img">
    <label for="">Name : </label>
    <input type="text" name="name" value="{{$classe->name}}" placeholder="name">
    <label for="">Schedule : </label>
    <input type="text" name="schedule" value="{{$classe->schedule}}" placeholder="schedule">
    <label for="">Trainer : </label>
    <select name="trainer_id">
        @foreach ($trainer as $item)
           @if ($classe->trainer->id === $item->id)
                
                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                @else
                    
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endif
        @endforeach
    </select>
    <label for="">Catégorie : </label>
    <select name="categorie">
        <option value="" selected>Choisissez !</option>
        <option value="mixte">Mixte</option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection