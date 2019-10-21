<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    
    public function chairs() {
        return view('pages.chairs');
    }

    public function rugs() {
        return view('pages.rugs');
    }

    public function products() {
        return view('pages.products');
    }
}
