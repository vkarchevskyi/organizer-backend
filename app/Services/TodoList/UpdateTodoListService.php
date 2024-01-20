<?php

declare(strict_types=1);

namespace App\Services\TodoList;

use App\DTO\TodoList\UpdateTodoListDTO;
use App\Models\TodoList;

class UpdateTodoListService
{
    public function run(UpdateTodoListDTO $listDTO): bool
    {
        return (bool) TodoList::query()
            ->where('id', '=', $listDTO->id)
            ->update([
                'name' => $listDTO->name
            ]);
    }
}
