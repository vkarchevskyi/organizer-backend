<?php

declare(strict_types=1);

namespace App\DTO\TodoList;

readonly class IndexTodoListsDTO
{
    public function __construct(
        public int $creator_id
    ) {
    }
}
