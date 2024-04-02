<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ActividadesController as ActividadesControllerRequest;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ActividadesControllerRequest\ActividadesControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ActividadesControllerRequest\ActividadesControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ActividadesControllerRequest\ActividadesControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ActividadesControllerRequest\ActividadesControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ActividadesControllerRequest\ActividadesControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ActividadesControllerRequest\ActividadesControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ActividadesControllerRequest\ActividadesControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ActividadesControllerRequest\ActividadesControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ActividadesControllerRequest\ActividadesControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ActividadesControllerRequest\ActividadesControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
