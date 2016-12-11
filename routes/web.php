<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('clients/home');
});

Route::get('/rezervare', [
    'uses' => 'ReservationsController@getReservationView',
    'as' => 'reservation.reservationForm'
]);

Route::post('/rezervare', [
    'uses' => 'ReservationsController@postReservationView',
    'as' => 'reservation.reservationForm'
]);

Route::get('/reservations/{parameter}', ['uses' =>'ReservationsController@getReservationJSON']);

Route::post('/markAsCalled', 'ReservationsController@postHasBeenCalled');


Route::post('/test', function () {
    
    if (isset($_POST["id"])) {
        $id=$_POST["id"];
        $reservation = \App\Reservation::find($id);
        $hasBeenCalled = $_POST["hasBeenCalled"];
        $reservation->hasBeenCalled = $hasBeenCalled;
        $reservation->save();
        return response(200);
    }
});





