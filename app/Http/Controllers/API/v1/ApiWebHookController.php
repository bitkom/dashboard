<?php

namespace App\Http\Controllers\API\v1;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class ApiWebHookController extends Controller {

	public function WebHookTest (Request $request) {
		Log::info("Full _REQUEST dump:\n".print_r($request->all(),true));
	}

	public function WebHookADComputer (Request $request) {
		Log::info("Full _REQUEST dump:\n".print_r($request->all(),true));
		
	}


}
