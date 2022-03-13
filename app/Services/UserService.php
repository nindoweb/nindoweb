<?php


namespace App\Services;


use App\Repositories\UserRepository;

class UserService extends BaseService
{

    public function repository(): string
    {
        return UserRepository::class;
    }
}
