<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, User $model): bool
    {
        return $user->id == $model->id || $user->is_superuser;
    }

    public function create(User $user): bool
    {
        return $user->is_superuser;
    }

    public function update(User $user, User $model): bool
    {
        return $user->is_superuser || $user->id == $model->id;
    }

    public function delete(User $user, User $model): bool
    {
        return $user->is_superuser;
    }

    public function restore(User $user, User $model): bool
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, User $model): bool
    {
        return $user->is_superuser;
    }
}
