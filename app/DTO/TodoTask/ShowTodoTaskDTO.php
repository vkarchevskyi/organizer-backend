<?php

declare(strict_types=1);

namespace App\DTO\TodoTask;

readonly class ShowTodoTaskDTO
{
    public function __construct(
        public int $id,
    ) {
    }
}
