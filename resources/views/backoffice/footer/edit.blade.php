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
<form class="mt-5" enctype="multipart/form-data"  action="{{route("footer.update", $footer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="email" value="{{$footer->email}}">
        <input type="text" name="adresse" value="{{$footer->adresse}}">
        <input type="text" name="number" value="{{$footer->number}}">
        <input type="text" name="text" value="{{$footer->text}}">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>

@endsection