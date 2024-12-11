<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


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
    

     //データベースからユーザ情報を取得しViewに渡す
    public function index()
    {
        // 1. データベースから会員情報(User)をすべて取得
        $users = User::all();

        // 2. 取得した会員情報を blade に渡す
        // account.blade.phpは'users'という名前でデータを受け取る
        return view('account',['users' => $users]);
    }

}
