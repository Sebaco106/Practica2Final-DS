<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EspeciesController as EspeciesControllerRequest;

class EspeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EspeciesControllerRequest\EspeciesControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EspeciesControllerRequest\EspeciesControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EspeciesControllerRequest\EspeciesControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EspeciesControllerRequest\EspeciesControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EspeciesControllerRequest\EspeciesControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EspeciesControllerRequest\EspeciesControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EspeciesControllerRequest\EspeciesControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EspeciesControllerRequest\EspeciesControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EspeciesControllerRequest\EspeciesControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EspeciesControllerRequest\EspeciesControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
