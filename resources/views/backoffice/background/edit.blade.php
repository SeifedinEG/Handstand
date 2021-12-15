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

<form enctype="multipart/form-data" action="{{route("background.update", $background->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div class="w-100 h-50"  style="display: flex; justify-content: center;">
    <div class="w-75 h-50" style="display:flex; flex-direction:column">
    <label for="">Photo :</label>
    <input type="file" name="img" value="{{$background->img}}">
    <br>
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$background->title}}">
    <br>
    <label for="">Subtitle :</label>
    <input type="text" name="subtitle" value="{{$background->subtitle}}">
    <br>
    <label for="">Texte 1 :</label>
    <input type="text" name="text" value="{{$background->text}}">
    <br>
    <label for="">Prio?  : </label>
    <select name="place">
        <option value="0" selected>Pas premier</option>
        <option value="1">Premier</option>
    </select>
    </div>
    </div>

    <div class="mt-3" style="display: flex; justify-content:center;">
    <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection