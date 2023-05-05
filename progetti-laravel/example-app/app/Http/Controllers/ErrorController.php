<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function nullResponse(Request $request) {
        return response()->json(null, 419);
    }
}
