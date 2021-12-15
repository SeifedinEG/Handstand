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
<form enctype="multipart/form-data"  action="{{route("event.update", $event->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="name" value="{{$event->name}}">
        <input type="text" name="date" value="{{$event->date}}">
        <input type="text" name="hour" value="{{$event->hour}}">
        <input type="text" name="text" value="{{$event->text}}">
        <label for="">Prio?  : </label>
        <select name="place">
            <option value="0" selected>Pas premier</option>
            <option value="1">Premier</option>
        </select>

</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection