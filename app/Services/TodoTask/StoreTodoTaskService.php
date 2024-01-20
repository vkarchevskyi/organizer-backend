<?php

declare(strict_types=1);

namespace App\Services\TodoTask;

use App\DTO\TodoTask\StoreTodoTaskDTO;
use App\Models\TodoTask;

class StoreTodoTaskService
{
    public function run(StoreTodoTaskDTO $todoListDTO): TodoTask
    {
        return TodoTask::query()->create([
            'content' => $todoListDTO->content,
            'list_id' => $todoListDTO->list_id,
        ]);
    }
}
