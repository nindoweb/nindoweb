<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Service $service): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Service $service): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Service $service): bool
    {
        return $user->is_staff;
    }

    public function restore(User $user, Service $service): bool
    {
        return $user->is_staff;
    }

    public function forceDelete(User $user, Service $service): bool
    {
        return $user->is_superuser;
    }
}
