<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTO\TodoList\DestroyTodoListDTO;
use App\DTO\TodoList\IndexTodoListsDTO;
use App\DTO\TodoList\ShowTodoListDTO;
use App\DTO\TodoList\StoreTodoListDTO;
use App\DTO\TodoList\UpdateTodoListDTO;
use App\Http\Requests\TodoList\DestroyTodoListRequest;
use App\Http\Requests\TodoList\IndexTodoListsRequest;
use App\Http\Requests\TodoList\ShowTodoListRequest;
use App\Http\Requests\TodoList\StoreTodoListRequest;
use App\Http\Requests\TodoList\UpdateTodoListRequest;
use App\Services\TodoList\DestroyTodoListService;
use App\Services\TodoList\IndexTodoListsService;
use App\Services\TodoList\ShowTodoListService;
use App\Services\TodoList\StoreTodoListService;
use App\Services\TodoList\UpdateTodoListService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TodoListController extends Controller
{
    public function index(IndexTodoListsRequest $request, IndexTodoListsService $service): JsonResponse
    {
        return response()->json([
            $service->run(new IndexTodoListsDTO($request->user()->id)),
            Response::HTTP_OK
        ]);
    }

    public function store(StoreTodoListRequest $request, StoreTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new StoreTodoListDTO($request->get('name'), $request->user()->id)),
            Response::HTTP_CREATED
        ]);
    }

    public function show(ShowTodoListRequest $request, int $id, ShowTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new ShowTodoListDTO($id)),
            Response::HTTP_OK
        ]);
    }

    public function update(UpdateTodoListRequest $request, int $id, UpdateTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new UpdateTodoListDTO($id, $request->get('name'))),
            Response::HTTP_OK
        ]);
    }

    public function destroy(DestroyTodoListRequest $request, int $id, DestroyTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new DestroyTodoListDTO($id)),
            Response::HTTP_OK
        ]);
    }
}
