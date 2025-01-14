<?php

namespace App\Actions\product;

use App\Http\Requests\addProductRequest;
use App\Models\product;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;

class addProduct extends Action
{

    public function handle(array $data)
    {
        product::create($data);
        return response()->json(['message'=>'product is added'], 201);
    }

    public function asController(addProductRequest $request): JsonResponse
    {

        return $this->handle($request->validated());
    }
}
