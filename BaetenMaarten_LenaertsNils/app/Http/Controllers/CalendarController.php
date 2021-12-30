<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\getEventRequest;


class CalendarController extends Controller{
	public function calendarInfo(){
		$wrapper = new SoapWrapper();
		$wrapper->add("getAllEvents", function($service){
			$service
			->wsdl(env("CALENDARAPI"))
			->classmap([getEventRequest::class]);
		});
		$response = $wrapper->call("getAllEvents.get", [new getEventRequest()]);
		return $response;
	}

	public function eventInfo(Request $request){
		return "hello";
	}
}