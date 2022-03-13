<?php


namespace App\Services;


use App\Repositories\HireRepository;

class HireService extends BaseService
{

    public function repository(): string
    {
        return HireRepository::class;
    }
}
