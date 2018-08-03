<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;

class SMSController extends Controller
{
    public static function sendSMS($phone_number){
        $sms = AWS::createClient('sns');

        $sms->publish([
            'Message' => 'Hello this is text msg from Ankit',
            'PhoneNumber' => $phone_number,
            'MessageAttributes' => [
                'AWS.SNS.SMS.SMSType'  => [
                    'DataType'    => 'String',
                    'StringValue' => 'Transactional',
                ]
            ],
        ]);
    }
}
