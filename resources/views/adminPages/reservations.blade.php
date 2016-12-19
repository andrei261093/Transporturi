@extends('layout.master')

@section('content')
    <div class="col-lg-12">
        <div class="responsive">
            <h2>Rezervari:</h2>
            <p>
                Detealii rezervari:
            </p>
            <ul class="list-group">
                @foreach ($reservations as $reservation)
                    <div class="list-group">
                        <li class="list-group-item">
                            <strong>{{ $reservation->name }}</strong>
                            <spam class="pull-right">{{$reservation->created_at}}</spam>
                        </li>
                        <a href="{{route('admin.reservationDetails', $reservation->id)}}" class="list-group-item clearfix">
                            <span class="glyphicon glyphicon-pencil"></span>
                            Pleaca din <strong>{{$reservation->location}}</strong> si merge in <strong>{{$reservation->destination}}</strong> .
                             <span class="pull-right">
                                 @if($reservation->hasBeenCalled===1)
                                      <span>A fost sunt:<font color="green"><strong >DA</strong></font> </span>
                                 @else
                                     <span>A fost sunt: <font color="red"><strong >NU</strong></font> </span>
                                 @endif
                                 <button onclick=" getConfirmation('{{ route('admin.deleteReservations', $reservation->id)}}');" class="btn btn-xs btn-warning">
                                     <span class="glyphicon glyphicon-trash">Sterge</span>
                                 </button>
                            </span>
                        </a>
                    </div>

                @endforeach
            </ul>
            <span class="center-block"></span>
            <center> {{ $reservations->links() }}</center>
        </div>
    </div>

    <script>
        function getConfirmation(url) {
            if (window.confirm('Sigur vrei sa stergi?'))
            {
                window.location =url
            }
            else
            {

            }
        }
    </script>

@endsection