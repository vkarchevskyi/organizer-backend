<?php

declare(strict_types=1);

namespace App\DTO\TodoList;

readonly class StoreTodoListDTO
{
    public function __construct(
        public string $name,
        public int $creator_id,
    ) {
    }
}
