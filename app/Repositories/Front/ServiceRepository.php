<?php


namespace App\Repositories\Front;


use App\Models\Service;
use App\Repositories\BaseRepository;

class ServiceRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Service::class;
    }
}
