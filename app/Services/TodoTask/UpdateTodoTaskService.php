<?php

declare(strict_types=1);

namespace App\Services\TodoTask;

use App\DTO\TodoTask\UpdateTodoTaskDTO;
use App\Models\TodoTask;

class UpdateTodoTaskService
{
    public function run(UpdateTodoTaskDTO $taskDTO): bool
    {
        $changes = [];

        if (isset($taskDTO->is_done)) {
            $changes['is_done'] = $taskDTO->is_done;
        }

        if (isset($taskDTO->list_id)) {
            $changes['list_id'] = $taskDTO->list_id;
        }

        if (isset($taskDTO->content)) {
            $changes['content'] = $taskDTO->content;
        }

        return (bool) TodoTask::query()
            ->where('id', '=', $taskDTO->id)
            ->update($changes);
    }
}
