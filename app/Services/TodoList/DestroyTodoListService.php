<?php

declare(strict_types=1);

namespace App\Services\TodoList;

use App\DTO\TodoList\DestroyTodoListDTO;
use App\Models\TodoList;

class DestroyTodoListService
{
    public function run(DestroyTodoListDTO $listDTO): bool
    {
        return (bool) TodoList::query()
            ->where('creator_id', '=', $listDTO->creator_id)
            ->where('id', '=', $listDTO->id)
            ->delete();
    }
}
