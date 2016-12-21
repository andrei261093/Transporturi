<?php

namespace App\Http\Controllers;
use App\Order;
use App\Notification;
use App\Devices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getOrderView(){
        return view('clients.createOrder');
    }

    public function postOrderView(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'telephone' => 'required|regex:/[0-9]/|min:10',
            'pickUpLocation' => 'required',
            'deliveryLocation' => 'required',
            'weight' => 'required|regex:/[0-9]/'
        ]);

        $order = new Order([
            'name' => $request->input('name'),
            'pickUpLocation' => $request->input('pickUpLocation'),
            'deliveryLocation' => $request->input('deliveryLocation'),
            'telephone' => $request->input('telephone'),
            'weight' => $request->input('weight'),
            'clientObservations' => $request->input('clientObservations')

        ]);

        $order->save();

        $notification_body = 'Comanda noua pentru ' . $order->name . ' cu plecare din ' .$order->pickUpLocation;

        Notification::sendNotification(Devices::all() , 'Comanda noua!' , $notification_body);

        return view('clients.succesOrderView');
    }

     public function getOrdersAdmin(){
        $orders = DB::table('orders')->orderBy('created_at', 'cresc')->paginate(15);

        return view('adminPages.orders', ['orders' => $orders]);
    }

      public function getOrderDetails($id)
    {
        $order = \App\Order::find($id);

        return view('adminPages.OrderView', ['order' => $order]);
    }

     public function getOrderDelete($id)
    {
        $order = \App\Order::find($id);
        $order->delete();
        return redirect()->back();
    }

      public function updateOrder(Request $request, $id){
        $order = \App\Order::find($id);
        $order->adminObservations = $request->adminObservations;
        $order->save();
      //  return view('adminPages.reservationView', ['reservation' => $reservation]);
        return redirect()->route('admin.orders');
    }
}
