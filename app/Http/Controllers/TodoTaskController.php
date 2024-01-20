<?php

namespace App\Http\Controllers;

use App\DTO\TodoTask\DestroyTodoTaskDTO;
use App\DTO\TodoTask\IndexTodoTasksDTO;
use App\DTO\TodoTask\ShowTodoTaskDTO;
use App\DTO\TodoTask\StoreTodoTaskDTO;
use App\DTO\TodoTask\UpdateTodoTaskDTO;
use App\Http\Requests\TodoTask\DestroyTodoTaskRequest;
use App\Http\Requests\TodoTask\IndexTodoTasksRequest;
use App\Http\Requests\TodoTask\ShowTodoTaskRequest;
use App\Http\Requests\TodoTask\StoreTodoTaskRequest;
use App\Http\Requests\TodoTask\UpdateTodoTaskRequest;
use App\Services\TodoTask\DestroyTodoTaskService;
use App\Services\TodoTask\IndexTodoTasksService;
use App\Services\TodoTask\ShowTodoTaskService;
use App\Services\TodoTask\StoreTodoTaskService;
use App\Services\TodoTask\UpdateTodoTaskService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TodoTaskController extends Controller
{
    public function index(IndexTodoTasksRequest $request, IndexTodoTasksService $service): JsonResponse
    {
        return response()->json([
            $service->run(new IndexTodoTasksDTO($request->user()->id)),
            Response::HTTP_OK
        ]);
    }

    public function store(StoreTodoTaskRequest $request, StoreTodoTaskservice $service): JsonResponse
    {
        return response()->json([
            $service->run(new StoreTodoTaskDTO(...$request->all())),
            Response::HTTP_CREATED
        ]);
    }

    public function show(ShowTodoTaskRequest $request, int $id, ShowTodoTaskservice $service): JsonResponse
    {
        return response()->json([
            $service->run(new ShowTodoTaskDTO($id)),
            Response::HTTP_OK
        ]);
    }

    public function update(UpdateTodoTaskRequest $request, int $id, UpdateTodoTaskservice $service): JsonResponse
    {
        return response()->json([
            $service->run(new UpdateTodoTaskDTO(...['id' => $id, ...$request->all()])),
            Response::HTTP_OK
        ]);
    }

    public function destroy(DestroyTodoTaskRequest $request, int $id, DestroyTodoTaskservice $service): JsonResponse
    {
        return response()->json([
            $service->run(new DestroyTodoTaskDTO($id)),
            Response::HTTP_OK
        ]);
    }
}
