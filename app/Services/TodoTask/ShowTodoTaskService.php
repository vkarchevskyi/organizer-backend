<?php

declare(strict_types=1);

namespace App\Services\TodoTask;

use App\DTO\TodoTask\ShowTodoTaskDTO;
use App\Models\TodoTask;

class ShowTodoTaskService
{
    public function run(ShowTodoTaskDTO $listDTO): TodoTask
    {
        return TodoTask::query()->find($listDTO->id);
    }
}
