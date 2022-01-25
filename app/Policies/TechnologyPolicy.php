<?php

namespace App\Policies;

use App\Models\Technology;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TechnologyPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Technology $technology): bool
    {
        return $user->id == $technology->user_id || $user->is_superuser;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Technology $technology): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Technology $technology): bool
    {
        return $user->id == $technology->user_id || $user->is_superuser;
    }

    public function restore(User $user, Technology $technology): bool
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, Technology $technology): bool
    {
        return $user->is_superuser;
    }
}
