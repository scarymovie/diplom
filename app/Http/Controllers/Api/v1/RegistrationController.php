<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegistrationRequest;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RegistrationController extends Controller
{
    public function registration(RegistrationRequest $request) : JsonResponse
    {
        $validated = $request->validated();

        try {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => \Hash::make($validated['password'])]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
        return response()->json($user);
    }
}
