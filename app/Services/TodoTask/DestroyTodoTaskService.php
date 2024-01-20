<?php

declare(strict_types=1);

namespace App\Services\TodoTask;

use App\DTO\TodoTask\DestroyTodoTaskDTO;
use App\Models\TodoTask;

class DestroyTodoTaskService
{
    public function run(DestroyTodoTaskDTO $taskDTO): bool
    {
        return (bool) TodoTask::query()
            ->where('id', '=', $taskDTO->id)
            ->delete();
    }
}
