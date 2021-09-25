<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Second\SecondStoreRequest;
use App\Http\Requests\Api\Second\SecondUpdateRequest;
use App\Http\Resources\Api\Second\SecondZoneResource;
use App\Models\Second;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SecondController extends Controller
{

    public function store(SecondStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $second = Second::create($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(new SecondZoneResource($second));
    }

    public function update(SecondUpdateRequest $request, Second $second): JsonResponse
    {
        $validated = $request->validated();

        try {
            $second = $second->update($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json($second, Response::HTTP_ACCEPTED);
    }

    public function destroy(Second $second):JsonResponse
    {
        try {
            $second->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
