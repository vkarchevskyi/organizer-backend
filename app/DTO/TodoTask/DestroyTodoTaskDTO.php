<?php

declare(strict_types=1);

namespace App\DTO\TodoTask;

readonly class DestroyTodoTaskDTO
{
    public function __construct(
        public int $id,
    ) {
    }
}
