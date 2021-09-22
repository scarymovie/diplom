<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class RegistrationController extends Controller
{
    public function registration(RegistrationRequest $request): JsonResponse
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
        return response()->json([
            'registered successfully',
            'name' => $user->name,
            'email' => $user->email
        ], 201);
    }
}
