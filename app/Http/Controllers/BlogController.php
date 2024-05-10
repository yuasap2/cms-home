<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     *ブログ一覧を表示する
     *
     *@return view
     */
    public function showList()
    {
        return view('blog.list');
    }
}
