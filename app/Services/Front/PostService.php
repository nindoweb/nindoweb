<?php


namespace App\Services\Front;


use App\Repositories\Front\PostRepository;
use App\Services\BaseService;

class PostService extends BaseService
{

    public function repository(): string
    {
        return PostRepository::class;
    }
}
