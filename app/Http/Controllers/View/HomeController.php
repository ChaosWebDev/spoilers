<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
}
