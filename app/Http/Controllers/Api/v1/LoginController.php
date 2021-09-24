<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'message' => 'Invalid login details'
                ], 401);
            }

            $user = User::where('email', $credentials['email'])
                ->firstOrFail();

            $prepareToken = $user->tokens()->delete();

            $token = $user->createToken('auth_token')
                ->plainTextToken;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }


        return response()->json([
            'name' => $user->name,
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'logged out'
        ]);
    }
}
