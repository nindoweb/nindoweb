<?php


namespace App\Services;


use App\Models\RequestForm;

class RequestFormService extends BaseService
{

    public function repository(): string
    {
        return RequestForm::class;
    }
}
