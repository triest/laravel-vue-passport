<?php

namespace App\Http\Controllers\Api\Auch;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            $user = Auth::user();

            $success['token'] =  $user->createToken('MyApp')-> accessToken;

            $success['name'] =  $user->name;

            return response()->json(['token' =>  $success['token']->token], 200);

        }

        else{

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);

        }

    }
}
