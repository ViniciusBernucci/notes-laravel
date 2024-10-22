<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                'text_username' => 'required|email',
                'text_password' => 'required| min:6|max:16'
            ],
            //messagens de erro
            [
                'text_username.required' => 'O usuário é obrigatório',
                'text_username.email' => 'O usuário deve ser um email válido',
                'text_password.required' => 'A senha é obrigatória',
                'text_password.min' => 'A senha deve ter pelo menos :min caracteres',
                'text_password.max' => 'A senha deve ter no máximo :max caracteres'
            ]
        );

        //get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        //echo 'ok';
// test database connection

        try{
            DB::connection()->getPdo();
            echo "Connected successfully ";
        }catch ( \PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        echo "Connected successfully ";



        // dd($request);  //var_dump + die



    }
}
