<?php

declare(strict_types=1);

namespace App\Services\TodoTask;

use App\DTO\TodoTask\IndexTodoTasksDTO;
use App\Models\TodoTask;
use Illuminate\Database\Eloquent\Collection;

class IndexTodoTasksService
{
    public function run(IndexTodoTasksDTO $listsDTO): Collection
    {
        return TodoTask::query()
            ->where('list_id', '=', $listsDTO->list_id)
            ->get();
    }
}
