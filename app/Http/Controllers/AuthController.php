<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (Request $request)
    {

        /* $input = $request->all();
        $vallidation = Validator::make($input,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($vallidation->fails()) {
            return response()->json(['erroe' => $vallidation->errors()->all()],422);
        }

        if (Auth::atempt(['email' => $input['email'], 'password' => $input['pasword']])) {
            $user = Auth::user();

            $token = $user->createToken('MyApp')->accessToken;

            return response()->json(['token' => $token]);
        }
         $http = new \GuzzleHttp\Client;

        try {
            $response = $http->post('http://todo-laravel.test/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => 2,
                    'client_secret' => 'c7narj3e8F5hvCz0X6SRQrVtzMG8wdmQ1N1KfMea',
                    'username' => $request->email,
                    'password' => $request->password,

                ]
            ]);


            return $response->getBody();
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() == 400) {
                return response()->json('Invalid Request. Please enter a username or a password', $e->getCode());
            }
            else if ($e->getCode() == 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
        }

        return response()->json('Something went wrong on the server', $e->getCode());

    } */}
}
