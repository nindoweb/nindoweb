<?php


namespace App\Services\Front;


use App\Repositories\Front\ServiceRepository;
use App\Services\BaseService;

class ServiceService extends BaseService
{

    public function repository(): string
    {
        return ServiceRepository::class;
    }
}
