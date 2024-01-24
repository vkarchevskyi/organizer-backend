<?php

declare(strict_types=1);

namespace App\Services\TodoTask;

use App\DTO\TodoTask\StoreTodoTaskDTO;
use App\Models\TodoTask;

class StoreTodoTaskService
{
    public function run(StoreTodoTaskDTO $taskDTO): TodoTask
    {
        return TodoTask::query()->create([
            'content' => $taskDTO->content,
            'list_id' => $taskDTO->list_id,
        ]);
    }
}
