@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="mt-4 d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("gallery.create")}}">Add + </a>
</div>
    <div class="w-25 d-flex flex-col m-auto mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($gallery as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>   @if (Storage::disk('public')->exists('img/' . $item->img))
                        <img style="width: 100px" src="{{ asset('img/' . $item->img) }}" alt=""></td>
                          @else
                        <img style="width: 100px" src="{{ asset($item->img) }}" alt=""></td>
                          @endif</td>
                    <td class=""> 
                        <div class="d-flex">
                        <a class="btn btn-warning" href="{{route("gallery.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{route("gallery.show", $item->id)}}">Show</a></button>&nbsp;&nbsp;
                        <form action="{{route("gallery.destroy", $item->id)}}" method="POST">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection