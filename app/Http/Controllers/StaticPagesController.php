<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class StaticPagesController extends Controller
{
//    总入口跳入方法
    public function jump()
    {
        return view('static_pages/include_home');
    }

    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
            return view('static_pages/home', compact('feed_items'));
        }
        return view('static_pages/login_home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }


}
