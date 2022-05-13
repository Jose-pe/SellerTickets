@extends('layouts.app')

@section('content')
    <section class="container">

        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col"># Entrada</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de Entrada</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($compras as $compra)
              <tr>
                <th scope="row">{{$compra->id}}</th>
                <td>{{$compra->users['name']}}</td>
                <th>{{$compra->tipoticket}}</th>
                <td>{{$compra->cantidad}}</td>
                <td>{{$compra->total}} $ </td>
                <td> <a class="btn btn-primary">  Generar Entrada </a></td>
              </tr>
            @endforeach
            </tbody>
          </table>


           
                   
          
    </section>
@endsection