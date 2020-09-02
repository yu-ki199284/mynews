<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //ニュース新規作成画面の表示
    public function add()
    {
        return view('admin.news.create');
    }
}
