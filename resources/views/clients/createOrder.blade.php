@extends('layout.master')

@section('title')
    Cheama masina!
@endsection

@section('content')
    <div>
        <div class="col-sm-6">
            <h1><center>Cheama masina la domiciliu!</center></h1>
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
                    <label for="address">Strada si numarul</label>
                    <input class="form-control" type="text" id="address"name="address"/>
                </div>
                <div class="form-group">
                    <label for="weight">Grautate estimata (kg)</label>
                    <input class="form-control" type="number"  min="100" max="1000" step="10" value="100" id="weight"name="weight"/>
                </div>
                <div class="form-group">
                    <label for="destination">Adresa destinatie</label>
                    <textarea class="form-control" type="text" rows="5" id="destination" name="destination">  </textarea>
                </div>
                <div class="form-group">
                    <label for="telephone" style="width:350px;">Numar de telefon</label>
                    <input class="form-control" onkeyup="this.value=this.value.replace(/[^\d]/,'')" type="tel" id="telephone"name="telephone"/>
                </div>

                <button type="submit" class="btn btn-primary">Finalizeaza</button>
                {{ csrf_field() }}
            </form>
        </div>

        <div class="col-sm-6">
            <div class="responsive">
                <h2>Principalele orase vizitate</h2>
                <p>Colectam si livram pachete in orice oras de pe ruta Bucuresti - Madrid si imprejurimi (max  20km distanta fata de orasele listate mai jos si greutate de peste 200kg). Pentru
                    pachete sau obiecte de dimesiune si greutate mai mare, le colectam si le livram la domiciliu.
                </p>
                <ul class="list-group">
                    <li class="list-group-item" style="height: 30px; padding: 5px 15px;"><strong>Romania</strong></li>
                    <li class="list-group-item" style="height: 30px; padding: 5px 15px;"><small>București</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Alexandria</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Roșiorii de vede</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Pitești</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Caracal</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Craiova</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Filiași</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Tr Severin</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Orșova</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Lugoj</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Timișoara</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Arad</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><strong>Spania</strong></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Girona</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Lleida</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Zaragoza</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Albacete</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Valencia</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Barcelona</small></li>
                    <li class="list-group-item"style="height: 30px; padding: 5px 15px;"><small>Madrid</small></li>

                </ul>
            </div>
        </div>

    </div>

@endsection