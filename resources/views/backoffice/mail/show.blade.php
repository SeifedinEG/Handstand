@extends("backoffice.partials.html")

@section("content")
    
<div class="d-flex mt-3 flex-column justify-content-center align-items-center">
   <div class="card d-flex justify-content-center flex-column">
    <span>{{$mail->name}}</span>
    <span>{{$mail->email}}</span>
    <span>{{$mail->status}}</span>
    <span>{{$mail->msg}}</span>
   </div>

    <a class="btn btn-danger" href="{{route("mail.index")}}">Retour</a>
</div>


@endsection