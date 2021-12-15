@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif    
<div class="mt-4 d-flex justify-content-center">
    <a class="btn btn-success" href="{{route("titre.create")}}">Add + </a>
</div>
<section class="d-flex justify-content-center">
    <div class="w-50 d-flex flex-col mt-3">
        <table class="table w-100 table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Job</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($titre as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->subtitle}}</td>
                    <td class=""> 
                        <div class="d-flex">
                            <a class="btn btn-success" href="{{route("titre.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection