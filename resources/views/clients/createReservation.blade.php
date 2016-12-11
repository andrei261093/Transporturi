@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Rezerva un loc!</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>
                            {{$error}}
                        </p>
                    @endforeach
                </div>
            @endif
            <form action="{{Route('reservation.reservationForm')}}" method="post">
                <div class="form-group">
                    <label for="name">Nume</label>
                    <input class="form-control" type="text" id="name"name="name"/>
                </div>
                <div class="form-group">
                    <label for="location">Localitate de plecare</label>
                    <input class="form-control" type="text" id="location"name="location"/>
                </div>
                <div class="form-group">
                    <label for="telephone">Numar de telefon</label>
                    <input class="form-control" type="text" id="telephone"name="telephone"/>
                </div>

                <button type="submit" class="btn btn-primary">Rezerva!</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection