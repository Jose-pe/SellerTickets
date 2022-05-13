@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Hola!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Ahora ya puedes comprar tus entradas
                </div>
            </div>
        </div>
         
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 align-self-center">
            <a href="{{route('ticketestandar')}}">
            <figure class="figure">
            <img class="mx-auto" src="img/ticketEST.jpg" class="tickets" alt="">
              
          
            </figure>
            <p> Juvenil</p>
            </a>
        </div>
      
        <div class="col-md-4 align-self-center">
        <a href="{{route('ticketvip')}}">
            <figure class="figure">
            <img class="mx-auto" src="img/ticketVIP.jpg" class="tickets" alt="">
          
        </figure>        
            <p>Adulto</p>
        </a>
        
        </div>
    </div>   
</div>
@endsection
