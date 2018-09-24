<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{

    /**
     * Subsit Form Contents.
     *
     * @return void
     */
    public function submit(Request $request) {

        Log::debug("the form returned");
        Log::debug($request);

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'lead' => 'URL',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);
        /*
          Add mail functionality here.
        */
        return response()->json(null, 200);
    }
}
