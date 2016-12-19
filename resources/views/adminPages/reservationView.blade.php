@extends('layout.master')

@section('content')

    <div class="col-lg-12">
        <div class="responsive">
            <a href="{{ route('admin.reservations') }}" class="btn  btn-warning pull-right" role="button">Inapoi </a>
            <h2>Detalii rezervare pentru <strong> {{ $reservation->name }}</strong></h2>

            <p>
                Info calatorie:
            </p>
            <ul class="list-group">
                    <div class="list-group">
                        <li class="list-group-item">Nume: <strong>{{$reservation->name}}</strong></li>
                        <li class="list-group-item">Plecare: <strong>{{$reservation->location}}</strong></li>
                        <li class="list-group-item">Destinatie: <strong>{{$reservation->destination}}</strong> </li>
                        <li class="list-group-item">Rezervare facuta pe data: <strong>{{$reservation->created_at}}</strong> </li>
                        <li class="list-group-item">Numar tel: <strong>{{$reservation->telephone}}</strong> </li>
                        @if($reservation->hasBeenCalled===1)
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
        <form action="{{route('admin.reservationUpdate', $reservation->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <textarea class="form-control" type="text" rows="5" id="destination" name='observations'>{{$reservation->observations}}</textarea>
            </div>

            <div class="form-group pull-right">
                <input type="submit" value='Salveaza' class='btn btn-success'>
            </div>

        </form>

    </div>

@endsection