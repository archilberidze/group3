<?php

namespace App\Actions\book;

use App\Http\Requests\addBookRequest;
use App\Models\book;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;

class addBook extends Action
{

    public function handle(array $data)
    {
        book::create($data);
        return response()->json(['message'=>'Book is added'], 201);
    }

    public function asController(addBookRequest $request): JsonResponse
    {

        return $this->handle($request->validated());
    }
}
