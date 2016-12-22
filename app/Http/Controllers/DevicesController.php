<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Devices;

class DevicesController extends Controller
{
	
    public function updateOfAddToken(Request $request)
    {
       $device = Devices::where('username', $request->username);

       if($device === null){
       		$new_device = new Devices([
       			'username' => $request->username;
       			'token' => $request->fcm_token;
       		]);
       		$new_device->save();
       }else{
       		$device->token = $request->fcm_token;
       		$device->save();
       }
    }
}
