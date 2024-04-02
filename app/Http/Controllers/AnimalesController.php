<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AnimalesController as AnimalesControllerRequest;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param AnimalesControllerRequest\AnimalesControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(AnimalesControllerRequest\AnimalesControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param AnimalesControllerRequest\AnimalesControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(AnimalesControllerRequest\AnimalesControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param AnimalesControllerRequest\AnimalesControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(AnimalesControllerRequest\AnimalesControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param AnimalesControllerRequest\AnimalesControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(AnimalesControllerRequest\AnimalesControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param AnimalesControllerRequest\AnimalesControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(AnimalesControllerRequest\AnimalesControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
