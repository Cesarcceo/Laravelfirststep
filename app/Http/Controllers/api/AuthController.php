<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class AuthController extends Controller
{
    public function login(Request $request){

        //validar datos
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'require|string',
        ]);

        //verificar
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Incorrect Credentials', 401
            ]);
        }

        $user = $request->user();

        $tokenAuth = $user->createToken('Personal Acces Token');

        // $token = $tokenAuth->token;
        // $token->expires_at = Carbon::now()->addWeeks(1);

        // $token->save();

        dd($tokenAuth->token);

        return response()->json([
            'access_token' => $tokenAuth->accesssToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenAuth->token->expires_at)->toDateTimeString(),
        ]);
    }

    public function user(Request $request){
        dd($request->user());

        return response()->json(
            $request->user()
        );
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json(
            ['message' => 'sesión terminada con éxito']
        );
    }
}
