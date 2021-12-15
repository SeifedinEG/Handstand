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
<form enctype="multipart/form-data"  action="{{route("pricing.update", $pricing->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="name" value="{{$pricing->name}}">
        <input type="text" name="price" value="{{$pricing->price}}">
        <input type="text" name="text1" value="{{$pricing->text1}}">
        <input type="text" name="text2" value="{{$pricing->text2}}">
        <input type="text" name="text3" value="{{$pricing->text3}}">
        <input type="text" name="text4" value="{{$pricing->text4}}">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection