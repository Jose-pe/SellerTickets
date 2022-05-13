@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5 col-md-12 col-lg-6 " >                

                <div class="card">
                    <div class="card-header">Panel de confirmacion</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row mb-2">
                          
                                <p class="mt-2" > <strong>Tipo de entrada:</strong> <strong class="text-danger" id="tipodeentrada"> ADULTOS </strong> </p>
                                <p id="iduser">{{Auth::User()->id}}</p>
                               
                        </div>   
                            <div class="input-group input-group-lg">
                            <input id="cantidadviptickets" type="number" min="1" max="5" class="form-control" placeholder="Cantidad de entradas" aria-describedby="inputGroup-sizing-lg">
                          </div>
                            <p class="mt-3"><strong >Total a pagar: <strong class="text-success" id="totalapagar">00.00</strong>  $ </strong></p>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-10 align-self-center">
                                    <a id="pagar" href="" class="btn btn-primary"> Pagar con NUBIZ </a>
                                </div>
                            </div>
                    </div>
                </div>
               
            
            </div>

        </div>

    </section>
    <script src="js\ticketvip.js"></script>
@endsection