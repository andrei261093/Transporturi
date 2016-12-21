@extends('layout.master')

@section('content')
 

    <div class="container responsive">
      <h2>Comenzi:</h2>
      <p>Detalii:</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nume</th>
            <th>Adresa ridicare</th>
            <th>Adresa Livrare</th>
           
            <th>Telefon</th>
            <th>Data</th>
            <th>A fost sunat</th>
            <th>Actiuni</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->pickUpLocation}}</td>
                <td>{{$order->deliveryLocation}}</td>
             
                <td>{{$order->telephone}}</td>
                <td>{{$order->created_at}}</td>
                <td>
                    
                     @if($order->hasBeenCalled===1)
                           <font color="green"><strong > DA</strong></font> 
                        @else
                          <font color="red"><strong > NU!</strong></font> 
                        @endif

                </td>
                <td>
                <a href="{{route('admin.orderDetails', $order->id)}}"><button class="btn btn-xs btn-primary">
                                     <span class="glyphicon glyphicon-info-sign">Detalii</span></button></a>
                 <button onclick=" getConfirmation('{{ route('admin.deleteOrder', $order->id)}}');" class="btn btn-xs btn-warning">
                                     <span class="glyphicon glyphicon-trash">Sterge</span></button>
                </td>
               
            </tr>
           @endforeach
        </tbody>
      </table>
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