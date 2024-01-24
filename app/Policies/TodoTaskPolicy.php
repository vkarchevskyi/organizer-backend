<?php

namespace App\Policies;

use App\Models\TodoTask;
use App\Models\User;

class TodoTaskPolicy
{
    public function update(User $user, TodoTask $todoTask): bool
    {
        return $user->id === $todoTask->list->creator_id;
    }

    public function delete(User $user, TodoTask $todoTask): bool
    {
        return $user->id === $todoTask->list->creator_id;
    }
}
