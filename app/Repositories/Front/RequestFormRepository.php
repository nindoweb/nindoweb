<?php


namespace App\Repositories\Front;


use App\Models\RequestForm;
use App\Repositories\BaseRepository;

class RequestFormRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return RequestForm::class;
    }
}
