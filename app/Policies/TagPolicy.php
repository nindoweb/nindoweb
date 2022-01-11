<?php

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Tag $tag): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Tag $tag): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Tag $tag): bool
    {
        return $user->is_superuser;
    }

    public function restore(User $user, Tag $tag): bool
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, Tag $tag): bool
    {
        return $user->is_superuser;
    }
}
