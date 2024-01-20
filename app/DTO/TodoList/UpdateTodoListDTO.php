<?php

declare(strict_types=1);

namespace App\DTO\TodoList;

readonly class UpdateTodoListDTO
{
    public function __construct(
        public int $id,
        public string $name,
    ) {
    }
}
