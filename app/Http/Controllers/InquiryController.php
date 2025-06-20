<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class InquiryController extends Controller
{

public function index()
{
    $users = User::all(); 
    return view('inquiry',compact('users'));
}

}
