<?php


namespace App\Services;


use App\Repositories\ProjectRepository;
use App\Services\BaseService;

class ProjectService extends BaseService
{

    public function repository(): string
    {
        return ProjectRepository::class;
    }
}
