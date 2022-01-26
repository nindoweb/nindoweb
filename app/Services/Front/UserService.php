<?php


namespace App\Services\Front;


use App\Repositories\Front\UserRepository;
use App\Services\BaseService;

class UserService extends BaseService
{

    public function repository(): string
    {
        return UserRepository::class;
    }
}
