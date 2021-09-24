<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Box\BoxStoreRequest;
use App\Http\Resources\Api\Box\BoxShowResource;
use App\Models\Box;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index(): JsonResponse
    {
        $box = Box::select('id', 'title')
            ->where('user_id', \Auth::id())
            ->get();
        return response()->json($box);
    }

    public function store(BoxStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $userId = \Auth::id();

        $box = Box::create([
            'title' => $validated['title'],
            'user_id' => \Auth::id(),
        ]);

        return response()->json([
            'id' => $box->id,
            'title' => $box->title
        ]);
    }

    public function show(Box $box): JsonResponse
    {
        return response()->json(new BoxShowResource($box));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
