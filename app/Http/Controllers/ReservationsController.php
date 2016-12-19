<?php

namespace App\Http\Controllers;

use App\Devices;
use App\Notification;
use App\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{

    public function getReservationView(){
        return view('clients.createReservation');
    }

    public function postReservationView(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'telephone' => 'required|regex:/[0-9]/|min:10',
            'location' => 'required|min:4',
            'destination' => 'required|min:4'
        ]);

        $reservation = new Reservation([
            'name' => $request->input('name'),
            'location' => $request->input('location'),
            'telephone' => $request->input('telephone'),
            'destination' => $request->input('destination')
        ]);

        $reservation->save();

        $notification_body = 'Rezervare loc nou pentru ' . $reservation->name . ' cu plecare din ' .$reservation->location . ' si destinatia '.$reservation->destination;

        Notification::sendNotification(Devices::all() , 'Rezervare noua!' , $notification_body);

         return view('clients.succesReservationView');
    }

    public function getReservationJSON($parameter){
        if($parameter == "andrei"){
            $reservations = \App\Reservation::orderBy('created_at', 'desc')->take(20)->get();
            return $reservations;
        }else{
            return null;
        }
    }
    
    public function postHasBeenCalled(Request $request){
        $data = $request->all();
        $reservation = \App\Reservation::find($data['id']);
        $reservation->hasBeenCalled = '1';
        $reservation->save();
        return response(200);
    }

    public function getReservationsAdmin(){
        $reservations = DB::table('reservations')->orderBy('created_at', 'cresc')->paginate(15);

        return view('adminPages.reservations', ['reservations' => $reservations]);
    }

    public function getReservationDelete($id)
    {
        $reservation = \App\Reservation::find($id);
        $reservation->delete();
        return redirect()->back();
    }

    public function getReservationDetails($id)
    {
        $reservation = \App\Reservation::find($id);

        return view('adminPages.reservationView', ['reservation' => $reservation]);
    }

    public function updateReservation(Request $request, $id){
        $reservation = \App\Reservation::find($id);
        $reservation->observations = $request->observations;
        $reservation->save();
        return view('adminPages.reservationView', ['reservation' => $reservation]);
    }



}
