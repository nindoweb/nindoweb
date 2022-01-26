<?php


namespace App\Services\Front;


use App\Models\RequestForm;
use App\Services\BaseService;

class RequestFormService extends BaseService
{

    public function repository(): string
    {
        return RequestForm::class;
    }
}
