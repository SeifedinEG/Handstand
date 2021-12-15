@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="mt-4 d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("trainer.create")}}">Add + </a>
</div>
    <div class="w-100 d-flex justify-content-center flex-col mt-3">
        <table class="table w-75">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Statut</th>
                <th scope="col">Facebook</th>
                <th scope="col">Twitter</th>
                <th scope="col">Dribbble</th>
                <th scope="col">Pinterest</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>   
                        @if (Storage::disk('public')->exists('img/' . $item->img))
                        <img style="width: 100px" src="{{ asset('img/' . $item->img) }}" alt=""></td>
                          @else
                        <img style="width: 100px" src="{{ asset($item->img) }}" alt=""></td>
                          @endif
                    </td>
                    <td>@if ($item->type == 1)
                        Leadcoach
                    @else
                        Coach
                    @endif</td>
                    <td>{{$item->url1}}</td>
                    <td>{{$item->url2}}</td>
                    <td>{{$item->url3}}</td>
                    <td>{{$item->url4}}</td>
                    <td class=""> 
                        <div class="d-flex">
                        <a class="btn btn-warning" href="{{route("trainer.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{route("trainer.show", $item->id)}}">Show</a></button>&nbsp;&nbsp;
                        <form action="{{route("trainer.destroy", $item->id)}}" method="POST">
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