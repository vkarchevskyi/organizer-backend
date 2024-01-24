<?php

declare(strict_types=1);

namespace App\DTO\TodoList;

readonly class DestroyTodoListDTO
{
    public function __construct(
        public int $id,
        public int $creator_id,
    ) {
    }
}
