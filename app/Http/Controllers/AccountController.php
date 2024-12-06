<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AccountController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
        return view('account');
    }
}

use App\Model\User;

 //データベースからユーザ情報を取得しViewに渡す
 public function index()
 {
    
 }

