<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Card\CardIndexRequest;
use App\Http\Requests\Api\Card\CardStoreRequest;
use App\Http\Resources\Api\Card\CardStoreResource;
use App\Models\Box;
use App\Models\Card;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function store(CardStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $card = Card::create($validated);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(new CardStoreResource($card));
    }

    public function show(Card $card): JsonResponse
    {
        return response()->json($card->toArray());
    }

    public function update(Request $request, Card $card): JsonResponse
    {
        try {
            $card = $card->update($request->all());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json($card, Response::HTTP_ACCEPTED);
    }

    public function destroy(Card $card): JsonResponse
    {
        try {
            $card->delete();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
