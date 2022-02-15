<?php


namespace App\Repositories;


use App\Models\Project;

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
