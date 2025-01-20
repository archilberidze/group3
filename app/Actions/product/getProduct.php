<?php

namespace App\Actions\product;

use App\Http\Requests\addProductRequest;
use App\Http\Resources\GetProductResource;
use App\Models\product;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class getProduct extends Action
{

    public function handle()
    {
        $products =product::all();
        return response()->json(GetProductResource::collection($products));
    }

    public function asController(): JsonResponse
    {

        return $this->handle();
    }
}
