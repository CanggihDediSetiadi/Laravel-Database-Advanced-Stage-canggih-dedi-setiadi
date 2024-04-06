<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';
        $icon = 'bi-house-fill me-3 fs-1';
        return view('home', ['pageTitle' => $pageTitle, 'icon' => $icon]);
    }
}
