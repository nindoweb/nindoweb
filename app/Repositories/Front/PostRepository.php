<?php


namespace App\Repositories\Front;


use App\Models\Post;
use App\Repositories\BaseRepository;

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
