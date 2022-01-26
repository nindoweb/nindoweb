<?php


namespace App\Services\Front;


use App\Repositories\Front\ProjectRepository;
use App\Services\BaseService;

class ProjectService extends BaseService
{

    public function repository(): string
    {
        return ProjectRepository::class;
    }
}
