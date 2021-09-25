<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Third\ThirdRequest;
use App\Http\Requests\Api\Third\ThirdUpdateRequest;
use App\Http\Resources\Api\Third\ThirdZoneResource;
use App\Models\Third;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ThirdController extends Controller
{

    public function store(ThirdRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $third = Third::create($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(new ThirdZoneResource($third));
    }

    public function update(ThirdUpdateRequest $request, Third $third): JsonResponse
    {
        $validated = $request->validated();

        try {
            $third = $third->update($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json($third, Response::HTTP_ACCEPTED);
    }

    public function destroy(Third $third): JsonResponse
    {
        try {
            $third->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
