<?php


namespace App\Repositories;


use App\Models\Hire;

class HireRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Hire::class;
    }
}
