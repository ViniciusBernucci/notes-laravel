<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login () {
        return view('login');
    }

    public function logout() {
        echo "logout";
    }

    public function loginSubmit(Request $request) {

        echo 'login submit';
    }





}
