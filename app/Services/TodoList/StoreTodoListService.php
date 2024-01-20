<?php

declare(strict_types=1);

namespace App\Services\TodoList;

use App\DTO\TodoList\StoreTodoListDTO;
use App\Models\TodoList;

class StoreTodoListService
{
    public function run(StoreTodoListDTO $todoListDTO): TodoList
    {
        return TodoList::query()->create([
            'name' => $todoListDTO->name,
            'creator_id' => $todoListDTO->creator_id,
        ]);
    }
}
