<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devices;
use Symfony\Component\Console\Output\ConsoleOutput;

class DevicesController extends Controller
{
	
    public function updateOfAddToken(Request $request)
    {
        $output = new ConsoleOutput();

        $output->writeln($request->username . " " . $request->fcm_token);

        $device = Devices::where('username', $request->username)->first();

        if($device === null){
            $new_device = new Devices([
                'username' => $request->username,
                'token' => $request->fcm_token
            ]);
            $new_device->save();
            $output->writeln("added new device");
        }else{
            $device->token = $request->fcm_token;
            $device->save();
            $output->writeln("updated " . $device->username);
        }
        return response(200);
    }
}
