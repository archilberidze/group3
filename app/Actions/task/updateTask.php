<?php

namespace App\Actions\task;

use App\Http\Requests\task\addTaskRequest;
use App\Http\Requests\updateTaskRequest;
use App\Models\task;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;

class updateTask extends Action
{

    public function handle(array $data, int $id)
    {
        $task = task::find($id);
        $task->update($data);
        return response()->json(['message'=>'task update saccesfully'], 200);
    }

    public function asController(updateTaskRequest $request, int $id): JsonResponse
    {
        return $this->handle($request->validated(),$id);
    }
}
