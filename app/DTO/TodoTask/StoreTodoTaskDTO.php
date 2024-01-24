<?php

declare(strict_types=1);

namespace App\DTO\TodoTask;

readonly class StoreTodoTaskDTO
{
    public function __construct(
        public string $content,
        public int $list_id,
    ) {
    }
}
