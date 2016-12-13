@extends('layout.master')

@section('title')
    Transporturi Romania-Spania
@endsection

@section('content')



        <div id="portfolio" class="container-fluid text-center">
            <h1>Transporturi Romania-Spania si retur</h1><br>
            <h2>Ce oferim?</h2>
            <div class="row text-center slideanim ">
                <div class="col-sm-6">
                    <div class="thumbnail ">
                        <img src="http://zonderpump.com/images/volkswagen-lt-1037.jpg" alt="Paris" width="400" height="300">
                        <p><strong>Transport persoane</strong><br>(Masina este dotata cu aer conditionat!)</p>
                        <a href="{{ route('reservation.reservationForm') }}" class="btn  btn-default" role="button">Rezerva un loc!</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img src="https://www.arenait.net/files/2016/11/colete-curierat.jpg" alt="New York" width="400" height="300">
                        <p><strong>Transport colete riticate si livrate la domiciliu</strong><br>(greutate mai mare de 200kg)</p>
                        <a href="{{ route('order.orderForm') }}" class="btn  btn-default" role="button">Cheama masina!</a>
                    </div>
                </div>

            </div><br>

            <h3>Ce spun fostii nostri clienti despre noi</h3>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->


                <div class="carousel-inner" style="height: 80px" role="listbox">
                    <div class="item active">
                        <h5>"Super! Am avut ocazia de a ma deplasa cu ei <br> si sunt foarte multumit de serviciile lor. Seriozitate si punctualitate,
                            <br> va recomand cu incredere!"<br><span style="font-style:normal;"></span></h5>
                    </div>
                    <div class="item">
                        <h5>"Foarte punctuali in toate punctele de colectare. <br>Am fost multumit in special ca a adus bagajul chiar la domiciliu..."<br><span style="font-style:normal;"></span></h5>
                    </div>
                    <div class="item">
                        <h5>"Personal calificat si de incredere"<br><span style="font-style:normal;"></span></h5>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis</p>
@endsection