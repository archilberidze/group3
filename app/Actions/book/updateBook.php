<?php

namespace App\Actions\book;

use App\Http\Requests\updateBookRequest;
use App\Models\book;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class updateBook extends Action
{

    public function handle(array $data, int $id)
    {
        $book = book::find($id);
        $book->update($data);
        return response()->json(['message'=>'Book updated saccesfully'], 200);
        // return response()->json($book, 200);
    }

    public function asController(updateBookRequest $request, int $id): JsonResponse
    {
        return $this->handle($request->validated(),$id);
    }
}

