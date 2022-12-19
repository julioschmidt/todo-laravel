<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials))
            abort(401, 'Invalid Credentials');

        $token = auth()->user()->createToken('Access Token');

        return response()
                    ->json([
                        'data' => [
                            'token' => $token->plainTextToken
                        ]
                        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete(); //remove todos tokens to usuário

        //auth()->user()->currentAccessToken()->delete(); //remove apenas o token da requisição

        return response()
                    ->json(['Logged out successfully'], 204);
    }
}
