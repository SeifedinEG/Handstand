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
<form enctype="multipart/form-data" action="{{route("logo.update", $logo->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div class="w-100 h-50"  style="display: flex; justify-content: center;">
    <div class="w-75 h-50" style="display:flex; flex-direction:column">
    <label for="">Logo :</label>
    <input type="file" name="img" value="{{$logo->img}}">
    </div>
    </div>

    <div class="mt-3" style="display: flex; justify-content:center;">
    <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection