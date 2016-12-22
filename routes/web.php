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

Route::get('/comanda', [
    'uses' => 'OrderController@getOrderView',
    'as' => 'order.orderForm'
]);

Route::post('/rezervare', [
    'uses' => 'ReservationsController@postReservationView',
    'as' => 'reservation.reservationForm'
]);

Route::post('/comanda', [
    'uses' => 'OrderController@postOrderView',
    'as' => 'order.orderForm'
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

Route::get('/signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
]);
Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout'
]);

Route::get('/reservations', [
    'uses' => 'ReservationsController@getReservationsAdmin',
    'as' => 'admin.reservations',
    'middleware' => 'auth'
]);

Route::get('/delete/reservation{id}', [
    'uses' => 'ReservationsController@getReservationDelete',
    'as' => 'admin.deleteReservations',
    'middleware' => 'auth'
]);

Route::get('/reservation/{id}', [
    'uses' => 'ReservationsController@getReservationDetails',
    'as' => 'admin.reservationDetails',
    'middleware' => 'auth'
]);

Route::put('/reservation/{id}', [
    'uses' => 'ReservationsController@updateReservation',
    'as' => 'admin.reservationUpdate',
    'middleware' => 'auth'
]);

Route::get('/orders', [
    'uses' => 'OrderController@getOrdersAdmin',
    'as' => 'admin.orders',
    'middleware' => 'auth'
]);

Route::get('/order/{id}', [
    'uses' => 'OrderController@getOrderDetails',
    'as' => 'admin.orderDetails',
    'middleware' => 'auth'
]);

Route::get('/delete/order/{id}', [
    'uses' => 'OrderController@getOrderDelete',
    'as' => 'admin.deleteOrder',
    'middleware' => 'auth'
]);

Route::put('/order/{id}', [
    'uses' => 'OrderController@updateOrder',
    'as' => 'admin.orderUpdate',
    'middleware' => 'auth'
]);

Route::post('/device', [
    'uses' => 'DevicesController@updateOrAddToken',
    'as' => 'system.manageToken',
]);

Route::post('/token', function () {
        return response(200);
});



