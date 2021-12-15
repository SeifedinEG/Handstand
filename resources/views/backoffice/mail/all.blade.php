@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
@endif

    <div class="w-100 d-flex flex-col justify-content-center m-auto mt-3">
        <table class="table w-75">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Statut</th>
                <th scope="col">E-mail</th>
                <th scope="col">Subject</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($mail as $item)
                
                @if ($item->status == "non lu")
                    <tr style="background-color: red">
                @else
                    <tr style="background-color: green">
                @endif
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                                       
                    <td>{{$item->status}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->msg}}</td>
                   
                    <td class=""> 
                        <div class="d-flex">
                        <a class="btn btn-secondary" href="{{route("mail.show", $item->id)}}">Show</a></button>&nbsp;&nbsp;
                        <form action="{{route("mail.destroy", $item->id)}}" method="POST">
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