<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\getEventRequest;


class CalendarController extends Controller{
    public function calendarInfo(){
            set_time_limit(5);
            $wrapper = new SoapWrapper();
            $wrapper->add("getAllEvents", function($service){
                    $service
                    ->wsdl(env("CALENDARAPI"))
                    ->classmap([getEventRequest::class]);
            });
            $response = $wrapper->call("getAllEvents.get", [new getEventRequest()]);
            return view("calendar/calendar")->with("events",$response->GetResult->Event);  
    }

    public function eventInfo(Request $request){
            return "hello";
    }
}