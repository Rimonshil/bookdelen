<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function bookcorner() {
        return view('frontend.bookcorner');
    }

    public function studenthub() {
        return view('frontend.studenthub');
    }

    public function signin() {
        return view('frontend.login');
    }

    public function registration() {
        return view('frontend.registration');

    }

    public function bookadd() {
        return view('frontend.bookadd');

    }

    public function postadd() {
        return view('frontend.postadd');

    }

    public function welcome() {
        return view('welcome');

    }

}
