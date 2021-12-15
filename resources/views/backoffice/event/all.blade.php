@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="mt-4 d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("event.create")}}">Add + </a>
</div>
<section class="d-flex justify-content-center">
    <div class="w-50 d-flex flex-col mt-3">
        <table class="table w-100">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Hour</th>
                <th scope="col">Text</th>
                <th scope="col">Place</th>

                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($event as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->hour}}</td>
                    <td>{{$item->text}}</td>
                    <td>{{$item->place}}</td>
                    <td class=""> 
                        <div class="d-flex">
                        <a class="btn btn-warning" href="{{route("event.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
        
                        <form action="{{route("event.destroy", $item->id)}}" method="POST">
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
</section>

@endsection