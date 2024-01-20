<?php

declare(strict_types=1);

namespace App\DTO\TodoTask;

readonly class IndexTodoTasksDTO
{
    public function __construct(
        public int $list_id,
    ) {
    }
}
