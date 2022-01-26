<?php


namespace App\Repositories\Front;


use App\Models\User;

class UserRepository extends \App\Repositories\BaseRepository
{

    public function getFieldsSearchable(): array
    {
        return [];
    }

    public function model(): string
    {
        return User::class;
    }
}
