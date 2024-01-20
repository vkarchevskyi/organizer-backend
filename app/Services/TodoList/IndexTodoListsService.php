<?php

declare(strict_types=1);

namespace App\Services\TodoList;

use App\DTO\TodoList\IndexTodoListsDTO;
use App\Models\TodoList;
use Illuminate\Database\Eloquent\Collection;

class IndexTodoListsService
{
    public function run(IndexTodoListsDTO $listsDTO): Collection
    {
        return TodoList::query()
            ->where('creator_id', '=', $listsDTO->creator_id)
            ->get();
    }
}
