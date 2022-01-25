<?php

namespace App\Policies;

use App\Models\RequestForm;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestFormPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_superuser || $user->is_staff;
    }

    public function view(User $user, RequestForm $requestForm): bool
    {
        return $user->is_superuser || $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_superuser || $user->is_staff;
    }

    public function update(User $user, RequestForm $requestForm): bool
    {
        return $user->is_superuser || $user->is_staff;
    }

    public function delete(User $user, RequestForm $requestForm): bool
    {
        return $user->is_superuser;
    }

    public function restore(User $user, RequestForm $requestForm): bool
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, RequestForm $requestForm): bool
    {
        return $user->is_superuser;
    }
}
