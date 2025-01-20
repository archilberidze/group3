<?php

namespace App\Actions\book;

use App\Models\book;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\deleteBookRequest;

class deleteBook extends Action
{

    public function handle(int $id)
    {
        $book = book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
    public function asController(int $id): JsonResponse
    {
        return $this->handle($id);
    }
}
