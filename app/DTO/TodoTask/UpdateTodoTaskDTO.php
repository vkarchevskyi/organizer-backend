<?php

declare(strict_types=1);

namespace App\DTO\TodoTask;

readonly class UpdateTodoTaskDTO
{
    public function __construct(
        public int $id,
        public ?string $content = null,
        public ?int $list_id = null,
        public ?bool $is_done = null,
    ) {
    }
}
