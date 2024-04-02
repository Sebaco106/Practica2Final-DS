<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RecintosController as RecintosControllerRequest;

class RecintosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param RecintosControllerRequest\RecintosControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(RecintosControllerRequest\RecintosControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param RecintosControllerRequest\RecintosControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(RecintosControllerRequest\RecintosControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param RecintosControllerRequest\RecintosControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(RecintosControllerRequest\RecintosControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param RecintosControllerRequest\RecintosControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(RecintosControllerRequest\RecintosControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param RecintosControllerRequest\RecintosControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(RecintosControllerRequest\RecintosControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
