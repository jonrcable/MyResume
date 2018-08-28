<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    /**
     * Subsit Form Contents.
     *
     * @return void
     */
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        /*
          Add mail functionality here.
        */
        return response()->json(null, 200);
    }
}
