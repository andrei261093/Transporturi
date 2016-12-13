@extends('layout.master')

@section('title')
    Cheama masina!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1><center>Cheama masina!</center></h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>
                            {{$error}}
                        </p>
                    @endforeach
                </div>
            @endif
            <form action="{{Route('order.orderForm')}}" method="post">
                <div class="form-group">
                    <label for="name">Nume</label>
                    <input class="form-control" type="text" id="name"name="name"/>
                </div>
                <div class="form-group">
                    <label for="country">Tara</label>
                    <input class="form-control" type="text" id="country"name="country"/>
                </div>
                <div class="form-group">
                    <label for="county">Judet/Regiune</label>
                    <input class="form-control" type="text" id="county"name="county"/>
                </div>
                <div class="form-group">
                    <label for="city">Oras</label>
                    <input class="form-control" type="text" id="city"name="city"/>
                </div>
                <div class="form-group">
                    <label for="address">Adresa</label>
                    <input class="form-control" type="text" id="address"name="address"/>
                </div>
                <div class="form-group">
                    <label for="weight">Grautate estimata (kg)</label>
                    <input class="form-control" type="number"  min="100" max="1000" step="10" value="100" id="weight"name="weight"/>
                </div>
                <div class="form-group">
                    <label for="telephone" style="width:350px;">Numar de telefon</label>
                    <input class="form-control" onkeyup="this.value=this.value.replace(/[^\d]/,'')" type="tel" id="telephone"name="telephone"/>
                </div>

                <button type="submit" class="btn btn-primary">Rezerva!</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

@endsection