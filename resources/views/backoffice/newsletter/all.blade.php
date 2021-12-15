@extends("backoffice.partials.html")

@section("content")

    <div class="w-25 d-flex flex-col m-auto mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">E-mail</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($newsletter as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->email}}</td>
                    <td class=""> 
                        <div class="d-flex">
                        <form action="{{route("newsletter.destroy", $item->id)}}" method="POST">
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