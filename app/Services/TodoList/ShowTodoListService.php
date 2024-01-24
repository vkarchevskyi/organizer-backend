<?php

declare(strict_types=1);

namespace App\Services\TodoList;

use App\DTO\TodoList\ShowTodoListDTO;
use App\Models\TodoList;

class ShowTodoListService
{
    public function run(ShowTodoListDTO $listDTO): TodoList
    {
        return TodoList::query()
            ->where('creator_id', '=', $listDTO->creator_id)
            ->where('id', '=', $listDTO->id)
            ->first();
    }
}
