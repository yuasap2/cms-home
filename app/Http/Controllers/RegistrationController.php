<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function new_registration()
    {
        return view('new_registration');
    }


}
