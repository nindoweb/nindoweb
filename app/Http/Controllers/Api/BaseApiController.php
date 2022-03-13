<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class BaseApiController extends Controller
{
    public function jsonResponse($data=[], int $statusCode=Response::HTTP_OK): \Illuminate\Http\JsonResponse
    {
        return response()->json($data, $statusCode);
    }

}
