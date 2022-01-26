<?php


namespace App\Repositories\Front;


use App\Models\Project;
use App\Repositories\BaseRepository;

class ProjectRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Project::class;
    }
}
