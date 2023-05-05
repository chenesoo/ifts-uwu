<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    public function create(Request $request)
    {

        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'classification' => ['required', 'integer', 'min:1', 'max:5'],
        ]);
}
}
