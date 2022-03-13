<?php


namespace App\Services;


use App\Repositories\TechnologyRepository;

class TechnologyService extends BaseService
{

    public function repository(): string
    {
        return TechnologyRepository::class;
    }
}
