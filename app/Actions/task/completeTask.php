<?php

namespace App\Actions\task;

use App\Http\Resources\completeTaskResource;
use App\Models\task;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;

class completeTask extends Action
{

    public function handle(int $id)
    {
        $task = task::find($id);
        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->status = 'completed';
        $task->save();

        return response()->json(new completeTaskResource($task), 200);
          
    }


    public function asController(int $id): JsonResponse
    {
        return $this->handle($id);
    }
}

