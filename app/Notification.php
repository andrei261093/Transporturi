<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 07.12.2016
 * Time: 17:30
 */

namespace App;


use Symfony\Component\HttpFoundation\Request;

class Notification
{
    public static function send_notification ($devices, $message)
    {
        $tokens = array();

        foreach ($devices as $device){
            $tokens[] = $device->token;
        }

     
        $url = 'https://fcm.googleapis.com/fcm/send';
        $fields = array(
            'registration_ids' => $tokens,
            'data' => $message
        );
        $headers = array(
            'Authorization:key = AAAAizujNvw:APA91bG8NZN6xHDEev9zzWZ_KDzaHpbHocpkLFrpULaSwn_7jSmSQDrPR9S5A8INrXS7SaB5GE_pXdPMbobdicSzjIPX1Mp1nFhOHOE_mc4vRn3x0iw11q1Rpq7rS6SI7I3iRYvhKnI44ms4kyomiOrgYLI3zhnuaA',
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }

    public static function sendNotification($devices, $title, $body){

        $message = array('message' => $body, 'title' => $title);

        self::send_notification($devices, $message);
    }
      

}