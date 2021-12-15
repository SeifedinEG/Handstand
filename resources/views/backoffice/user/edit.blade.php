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
<form enctype="multipart/form-data"  action="{{route("user.update", $user->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div style="display: flex; justify-content:center;">
        <input type="text" name="name" value="{{$user->name}}">
        <input type="text" name="email" value="{{$user->email}}">
        <input type="text" name="password" value="{{$user->password}}">
        <select name="role_id">
            @foreach ($role as $item)
                @if ($user->role->id === $item->id)
                
                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                @else
                    
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endif
            @endforeach
        </select>
</div>
<br>
<div style="display: flex; justify-content:center;">
    <button class="btn btn-success text-white" type="submit">Update</button>
    </div>

</form>
@endsection