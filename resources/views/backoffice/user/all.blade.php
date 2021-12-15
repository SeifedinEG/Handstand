@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<section class="d-flex justify-content-center">
    <div class="w-75 d-flex flex-column justify-content-center mt-3">
        <h3>Users</h3>
        <table class="table w-100">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Rôle</th>
                <th scope="col">Pack</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td>{{$item->role->name}}</td>
                    <td>{{$item->pack}}</td>

                    <td class=""> 
                        <div class="d-flex">
                            @can("update", $item)
                            <a class="btn btn-success" href="{{route("user.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                            @endcan
                            @can('delete', $item)
                            <form action="{{route("user.destroy", $item->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>

<section class="d-flex justify-content-center">
    <div class="w-75 d-flex flex-column justify-content-center">
    <h3>Rôles</h3>

        <table class="table w-25">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name of the role</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($role as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>


@endsection