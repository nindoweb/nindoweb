<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Category $category): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Category $category): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Category $category): bool
    {
        return $user->is_superuser;
    }

    public function restore(User $user, Category $category): bool
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, Category $category): bool
    {
        return $user->is_superuser;
    }
}
