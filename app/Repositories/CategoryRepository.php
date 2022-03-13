<?php


namespace App\Repositories;


use App\Models\Category;

class CategoryRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Category::class;
    }
}
