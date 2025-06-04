<?php

namespace App\Http\Controllers;


class TwilioController extends Controller
{
    public function sendSms()
    {
        $sid = env('ACCOUNT_SID');
        $token = env('AUTH_TOKEN'); 
        $from = '+13412173669';
        $to = '+18777804236';
        $body = 'hello CodeHunger';

        $url = "https://api.twilio.com/2010-04-01/Accounts/{$sid}/Messages.json";

        $data = http_build_query([
            'To' => $to,
            'From' => $from,
            'Body' => $body,
        ]);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_USERPWD, "{$sid}:{$token}");
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return "Curl error: " . $error_msg;
        }

        curl_close($ch);

        // Print the response
        echo $response;
        return;
    }
}
