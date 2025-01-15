<?php

namespace App\Actions\task;

use App\Http\Requests\TittleRequest;
use App\Http\Resources\getTaskResource;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class getTask extends Action
{

    public function handle(array $data)
    {

       $task = task::likeName($data['tittle'])->get();

       return response()->json(getTaskResource::collection($task), 200);
    }

    public function asController(TittleRequest $request): JsonResponse
    {
        return $this->handle($request->validated());
    }
}
