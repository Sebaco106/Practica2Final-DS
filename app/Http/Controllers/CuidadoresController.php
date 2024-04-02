<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CuidadoresController as CuidadoresControllerRequest;

class CuidadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param CuidadoresControllerRequest\CuidadoresControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(CuidadoresControllerRequest\CuidadoresControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param CuidadoresControllerRequest\CuidadoresControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(CuidadoresControllerRequest\CuidadoresControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param CuidadoresControllerRequest\CuidadoresControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(CuidadoresControllerRequest\CuidadoresControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param CuidadoresControllerRequest\CuidadoresControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(CuidadoresControllerRequest\CuidadoresControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param CuidadoresControllerRequest\CuidadoresControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(CuidadoresControllerRequest\CuidadoresControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
