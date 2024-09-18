<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        echo "logout";
    }

    public function loginSubmit(Request $request)
    {

        //Validação de formulário
        $request->validate(
            [
                'text_username' => 'required',
                'text_password' => 'required'
            ]
        );

        //get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'ok';


        // dd($request);  //var_dump + die



    }
}
