@extends('layout.master')

@section('content')

    <div class="col-lg-12">
        <div class="responsive">
            <a href="{{ route('admin.orders') }}" class="btn  btn-warning pull-right" role="button">Inapoi </a>
            <h2>Detalii comanda pentru <strong> {{ $order->name }}</strong></h2>

            <p>
                Info comanda:
            </p>
            <ul class="list-group">
                    <div class="list-group">
                        <li class="list-group-item">Nume: <strong>{{$order->name}}</strong></li>
                        <li class="list-group-item">Adresa ridicare: <strong>{{$order->pickUpLocation}}</strong></li>
                        <li class="list-group-item">Adresa livrare: <strong>{{$order->deliveryLocation}}</strong> </li>
                        <li class="list-group-item">Greutate estimata: <strong>{{$order->weight}}kg</strong> </li>
                        <li class="list-group-item">Comanda facuta pe data: <strong>{{$order->created_at}}</strong> </li>
                        <li class="list-group-item">Numar tel: <strong>{{$order->telephone}}</strong> </li>
                        <li class="list-group-item">Observatii Client: <strong>{{$order->clientObservations}}</strong> </li>
                        @if($order->hasBeenCalled===1)
                            <li class="list-group-item">A fost sunt:<font color="green"><strong > DA</strong></font> </li>
                        @else
                            <li class="list-group-item">A fost sunt:<font color="red"><strong > NU!</strong></font> </li>
                        @endif
                    </div>
            </ul>


        </div>
    </div>

    <div class="col-lg-12">
        <h4>Observatii:</h4>
        <form action="{{route('admin.orderUpdate', $order->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <textarea class="form-control" type="text" rows="5" id="adminObservations" name='adminObservations'>{{$order->adminObservations}}</textarea>
            </div>

            <div class="form-group pull-right">
                <input type="submit" value='Salveaza' class='btn btn-success'>
            </div>

        </form>

    </div>

@endsection