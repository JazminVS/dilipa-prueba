<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login() {
        $credentials = $this->validate(request(),[
           'email'=>'email|required|string',
            'password'=>'required|string'
        ]);
        //return $credentials;
        if(Auth::attempt($credentials)){
            return 'Tu sesion ha sido iniciada correctamente';
            //return redirect()->route('ejemplo');
        }
        return back()->withErrors(['email'=>'El email no coincide con nuestros registros']);
    }
}
