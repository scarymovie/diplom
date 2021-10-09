<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Card\CardIndexRequest;
use App\Http\Resources\Api\Card\CardIndexResource;
use App\Models\Card;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CardIndexController extends Controller
{
    public function index(CardIndexRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $card = Card::where('box_id', $validated['boxId'])
            ->with(['first', 'second', 'third'])
            ->get();
        return response()->success(CardIndexResource::collection($card));
    }
}
