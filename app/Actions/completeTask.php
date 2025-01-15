<?php

namespace App\Actions\task;

use App\Models\task;
use Lorisleiva\Actions\Action;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\task\completeTaskRequest;

class completeTask extends Action
{
  
    public function handle(int $id): JsonResponse
    {
        $task = task::find($id);
        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        if ($task) {
            $task->status = 'completed';  
            $task->save();

            return response()->json(['message' => 'Task completed successfully'], 200);
        }

        return response()->json(['message' => 'Task not found'], 404);
    }


    public function asController(int $id): JsonResponse
    {
        return $this->handle($id);
    }
}

