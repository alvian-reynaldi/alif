<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReCaptchaController extends Controller
{
     public function index() 
    {
        return view('recaptcha');
    }

}