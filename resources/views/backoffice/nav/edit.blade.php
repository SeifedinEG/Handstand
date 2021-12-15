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
<form enctype="multipart/form-data"  action="{{route("nav.update", $nav->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="name" value="{{$nav->name}}">
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection