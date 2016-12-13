<?php

namespace App\Http\Controllers;
use App\Order;
use App\Notification;
use App\Devices;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrderView(){
        return view('clients.createOrder');
    }

    public function postOrderView(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'telephone' => 'required|regex:/[0-9]/|min:10',
            'address' => 'required|min:4',
            'country' => 'required|min:4',
            'country' => 'required|min:4',
            'country' => 'required|min:4',
            'weight' => 'required|regex:/[0-9]/'
        ]);

        $order = new Order([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
            'county' => $request->input('county'),
            'telephone' => $request->input('telephone'),
            'city' => $request->input('city'),
            'weight' => $request->input('weight'),
            'address' => $request->input('address')

        ]);

        $order->save();

        $notification_body = 'Comanda noua pentru ' . $order->name . ' cu plecare din ' .$order->location;

        Notification::sendNotification(Devices::all() , 'Comanda noua!' , $notification_body);

        return view('clients.succesOrderView');
    }
}
