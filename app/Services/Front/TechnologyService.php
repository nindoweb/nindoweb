<?php


namespace App\Services\Front;


use App\Repositories\Front\TechnologyRepository;
use App\Services\BaseService;

class TechnologyService extends BaseService
{

    public function repository(): string
    {
        return TechnologyRepository::class;
    }
}
