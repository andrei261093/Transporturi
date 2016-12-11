@extends('layout.master')

@section('title')
    Transporturi Spania-Romania
@endsection

@section('content')
    <div class="btn-group btn-group-lg col-md-3 col-md-offset-5" role="group"  aria-label="Buttons">
        <a href="{{ route('reservation.reservationForm') }}" class="btn  btn-default" role="button">Persoane</a>

        <button type="button" class="btn btn-default">Obiecte</button>

    </div>

@endsection