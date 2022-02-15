<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreHireRequest;
use App\Services\HireService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HireController extends Controller
{

    public function __construct(private HireService $hireService)
    {
    }

    public function store(StoreHireRequest $storeHireRequest): \Illuminate\Http\JsonResponse
    {
        $data = $storeHireRequest->validated();
        $this->hireService->create($data);

        return response()->json(__('Data successfully created'), Response::HTTP_CREATED);
    }

}
