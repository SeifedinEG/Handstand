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
<form enctype="multipart/form-data"  action="{{route("trainer.update", $trainer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="m-auto d-flex justify-content-center flex-column w-25">
        <label for="">Name : </label>
        <input type="text" name="name" value="{{$trainer->name}}">
        <label for="">Image :</label>
        <input type="file" name="img">
        <label for="">Facebook : </label>
        <input type="text" name="url1" value="{{$trainer->url1}}">
        <label for="">Twitter : </label>
        <input type="text" name="url2" value="{{$trainer->url2}}">
        <label for="">Dribbble : </label>
        <input type="text" name="url3" value="{{$trainer->url3}}">
        <label for="">Pinterest : </label>
        <input type="text" name="url4" value="{{$trainer->url4}}">
        <label for="">Prio?  : </label>
        <select name="type">
            <option value="0" selected>Coach</option>
            <option value="1">Leadcoach</option>
        </select>
    </div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection