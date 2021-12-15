@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="mt-4 d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("classe.create")}}">Add + </a>
</div>
    <div class="w-75 d-flex flex-col m-auto mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Schedule</th>
                <th scope="col">Trainer</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($classe as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>   @if (Storage::disk('public')->exists('img/' . $item->img))
                        <img style="width: 100px" src="{{ asset('img/' . $item->img) }}" alt=""></td>
                          @else
                        <img style="width: 100px" src="{{ asset($item->img) }}" alt=""></td>
                          @endif</td>
                    <td>{{$item->name}}</td>    
                    <td>{{$item->schedule}}</td>    
                    <td>{{$item->trainer->name}}</td> 
                    <td>{{$item->categorie}}</td>    
                    <td class=""> 
                        <div class="d-flex">
                        <a class="btn btn-warning" href="{{route("classe.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                        <form action="{{route("classe.destroy", $item->id)}}" method="POST">
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