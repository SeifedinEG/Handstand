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
<form enctype="multipart/form-data" action="{{route("map.update", $map->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div class="w-100 h-50"  style="display: flex; justify-content: center;">
    <label for="">Type :</label>
    <br>
    <label for="">Nom :</label>
    <input type="text" name="nom" value="{{$map->nom}}">
    <label for="">Ville :</label>
    <input type="text" name="ville" value="{{$map->ville}}">
    </div>
    </div>

    <div class="mt-3" style="display: flex; justify-content:center;">
    <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection