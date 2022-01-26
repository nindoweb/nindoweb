<?php


namespace App\Repositories\Front;


use App\Models\Technology;
use App\Repositories\BaseRepository;

class TechnologyRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Technology::class;
    }
}
