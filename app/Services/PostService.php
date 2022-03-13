<?php


namespace App\Services;


use App\Repositories\PostRepository;

class PostService extends BaseService
{

    public function repository(): string
    {
        return PostRepository::class;
    }
}
