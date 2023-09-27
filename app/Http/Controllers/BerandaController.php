<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda() {
        return view('home.beranda');
    }

    public function profile() {
        return view('home.profile');
    }

    public function experience() {
        return view('home.experience');
    }

    public function karya() {
        return view('home.karya');
    }
}
