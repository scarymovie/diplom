<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\First\FirstRequest;
use App\Http\Requests\Api\First\FirstUpdateRequest;
use App\Models\First;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FirstController extends Controller
{

    public function store(FirstRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $first = First::create($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json($first);
    }

    public function update(FirstUpdateRequest $request, First $first): JsonResponse
    {
        $validated = $request->validated();

        try {
            $first = $first->update($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json($first, Response::HTTP_ACCEPTED);
    }

    public function destroy(First $first): JsonResponse
    {
        try {
            $first->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
