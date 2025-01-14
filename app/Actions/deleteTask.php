<?php

namespace App\Actions\task;

use App\Models\task;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\deleteTaskRequest;

class deleteTask
{
    use AsAction;

    public function handle(int $id)
    {
        $task = task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted successfully'], 200);
    }

    public function asController(deleteTaskRequest $request, int $id): JsonResponse
    {
        return $this->handle($id);
    }
}

