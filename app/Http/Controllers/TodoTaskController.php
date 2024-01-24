<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTO\TodoTask\DestroyTodoTaskDTO;
use App\DTO\TodoTask\IndexTodoTasksDTO;
use App\DTO\TodoTask\StoreTodoTaskDTO;
use App\DTO\TodoTask\UpdateTodoTaskDTO;
use App\Http\Requests\TodoTask\StoreTodoTaskRequest;
use App\Http\Requests\TodoTask\UpdateTodoTaskRequest;
use App\Services\TodoTask\DestroyTodoTaskService;
use App\Services\TodoTask\IndexTodoTasksService;
use App\Services\TodoTask\StoreTodoTaskService;
use App\Services\TodoTask\UpdateTodoTaskService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TodoTaskController extends Controller
{
    public function index(int $listId, Request $request, IndexTodoTasksService $service): JsonResponse
    {
        return response()->json([
            $service->run(new IndexTodoTasksDTO($listId, $request->user()->id)),
            Response::HTTP_OK
        ]);
    }

    public function store(StoreTodoTaskRequest $request, StoreTodoTaskservice $service): JsonResponse
    {
        $list_id = $request->get('list_id');
        if ($list_id) {
            $list_id = intval($list_id);
        }

        return response()->json([
            $service->run(
                new StoreTodoTaskDTO(
                    content: $request->get('content'),
                    list_id: $list_id,
                )
            ),
            Response::HTTP_CREATED
        ]);
    }

    public function update(UpdateTodoTaskRequest $request, int $id, UpdateTodoTaskservice $service): JsonResponse
    {
        $is_done = $request->get('is_done');
        if ($is_done) {
            $is_done = boolval($is_done);
        }

        $list_id = $request->get('list_id');
        if ($list_id) {
            $list_id = intval($list_id);
        }

        return response()->json([
            $service->run(
                new UpdateTodoTaskDTO(
                    id: $id,
                    content: $request->get('content'),
                    list_id: $list_id,
                    is_done: $is_done,
                )
            ),
            Response::HTTP_OK
        ]);
    }

    public function destroy(int $id, DestroyTodoTaskservice $service): JsonResponse
    {
        return response()->json([
            $service->run(new DestroyTodoTaskDTO($id)),
            Response::HTTP_OK
        ]);
    }
}
