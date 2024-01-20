<?php

declare(strict_types=1);

namespace App\DTO\TodoList;

readonly class ShowTodoListDTO
{
    public function __construct(
        public int $id,
    ) {
    }
}
