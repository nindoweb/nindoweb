<?php


namespace App\Services;


use App\Repositories\ServiceRepository;

class ServiceService extends BaseService
{

    public function repository(): string
    {
        return ServiceRepository::class;
    }
}
