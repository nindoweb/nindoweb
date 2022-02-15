<?php


namespace App\Repositories;


use App\Models\Post;

class PostRepository extends BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return Post::class;
    }
}
