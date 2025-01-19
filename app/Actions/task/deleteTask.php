<?php

namespace App\Actions\task;

use App\Models\task;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\deleteTaskRequest;
use App\Http\Resources\deleteTaskResource;

class deleteTask extends Action
{

    public function handle(int $id)
    {
        $task = task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(new deleteTaskResource($task), 200);
    }
    public function asController(int $id): JsonResponse
    {
        return $this->handle($id);
    }
}

