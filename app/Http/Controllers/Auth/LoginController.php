<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){

        if(Auth::attempt(['Correo' => request('Correo'), 'password' => request('password')])){
            $user = Auth::user();
            // $success['token'] =  $user->createToken('MyApp')->accessToken;
            return response()->json($user, 200);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
}
