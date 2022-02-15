<?php


namespace App\Repositories;


use App\Models\RequestForm;

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
