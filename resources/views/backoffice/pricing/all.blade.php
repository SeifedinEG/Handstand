@extends("backoffice.partials.html")

@section("content")
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    
<section class="d-flex justify-content-center">
    <div class="w-50 d-flex flex-col mt-3">
        <table class="table w-100">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Text1</th>
                <th scope="col">Text2</th>
                <th scope="col">Text3</th>
                <th scope="col">Text4</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pricing as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->text1}}</td>
                    <td>{{$item->text2}}</td>
                    <td>{{$item->text3}}</td>
                    <td>{{$item->text4}}</td>
                    <td class=""> 
                        <div class="d-flex">
                        <a class="btn btn-success" href="{{route("pricing.edit", $item->id)}}">Edit</a>&nbsp;&nbsp;
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection