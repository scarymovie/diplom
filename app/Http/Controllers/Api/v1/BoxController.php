<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Box\BoxStoreRequest;
use App\Http\Requests\Api\Box\BoxUpdateRequest;
use App\Http\Resources\Api\Box\BoxResource;
use App\Http\Resources\Api\Box\BoxShowResource;
use App\Models\Box;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BoxController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $box = Box::select('id', 'title')
                ->with('prepareCard')
                ->where('user_id', \Auth::id())
                ->get();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
        return response()->json(BoxResource::collection($box));
    }

    public function store(BoxStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $box = Box::create([
                'title' => $validated['title'],
                'user_id' => \Auth::id(),
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json([
            'id' => $box->id,
            'title' => $box->title
        ], Response::HTTP_CREATED);
    }

    public function show(Box $box): JsonResponse
    {
        return response()->json(new BoxShowResource($box));
    }

    public function update(BoxUpdateRequest $request, Box $box): JsonResponse
    {
        $validated = $request->validated();
        try {
            $box = $box->update($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json($box, Response::HTTP_ACCEPTED);
    }

    public function destroy(Box $box): JsonResponse
    {
        try {
            $box->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
