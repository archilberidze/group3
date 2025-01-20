<?php

namespace App\Actions\book;

use App\Http\Requests\AuthorRequest;
use App\Http\Resources\getBookResource;
use App\Models\book;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class getBook extends Action
{

    public function handle(array $data)
    {
       $book = book::LikeAuthor($data['author'])->get();

       if ($book->isEmpty()) {
        return response()->json(['message' => 'No books found for the specified author'], 404);
    }
       return response()->json(getBookResource::collection($book), 200);
    }

    public function asController(AuthorRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
