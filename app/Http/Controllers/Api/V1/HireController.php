<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Api\V1\StoreHireRequest;
use App\Services\HireService;
use Illuminate\Http\Response;


class HireController extends BaseApiController
{

    public function __construct(private HireService $hireService)
    {
    }

    public function store(StoreHireRequest $storeHireRequest): \Illuminate\Http\JsonResponse
    {
        $data = $storeHireRequest->validated();
        $this->hireService->create($data);

        return $this->jsonResponse(__('Your resume has been successfully registered. We will contact you in the future'), Response::HTTP_CREATED);
    }

}
