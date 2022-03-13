<?php

namespace App\Policies;

use App\Models\Hire;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HirePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->is_staff || $user->is_superuser;
    }

    public function view(User $user, Hire $hire)
    {
        return $user->is_staff || $user->is_superuser;
    }

    public function create(User $user)
    {
        return false;
    }

    public function update(User $user, Hire $hire)
    {
        return $user->is_staff || $user->is_superuser;
    }

    public function delete(User $user, Hire $hire)
    {
        return $user->is_staff;
    }

    public function restore(User $user, Hire $hire)
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, Hire $hire)
    {
        return $user->is_superuser;
    }
}
