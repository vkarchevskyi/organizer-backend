<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DTO\TodoList\DestroyTodoListDTO;
use App\DTO\TodoList\IndexTodoListsDTO;
use App\DTO\TodoList\ShowTodoListDTO;
use App\DTO\TodoList\StoreTodoListDTO;
use App\DTO\TodoList\UpdateTodoListDTO;
use App\Http\Requests\TodoList\StoreTodoListRequest;
use App\Http\Requests\TodoList\UpdateTodoListRequest;
use App\Services\TodoList\DestroyTodoListService;
use App\Services\TodoList\IndexTodoListsService;
use App\Services\TodoList\ShowTodoListService;
use App\Services\TodoList\StoreTodoListService;
use App\Services\TodoList\UpdateTodoListService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TodoListController extends Controller
{
    public function index(Request $request, IndexTodoListsService $service): JsonResponse
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

    public function show(int $id, Request $request, ShowTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new ShowTodoListDTO($id, $request->user()->id)),
            Response::HTTP_OK
        ]);
    }

    public function update(int $id, UpdateTodoListRequest $request, UpdateTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new UpdateTodoListDTO($id, $request->get('name'), $request->user()->id)),
            Response::HTTP_OK
        ]);
    }

    public function destroy(int $id, Request $request, DestroyTodoListService $service): JsonResponse
    {
        return response()->json([
            $service->run(new DestroyTodoListDTO($id, $request->user()->id)),
            Response::HTTP_OK
        ]);
    }
}
