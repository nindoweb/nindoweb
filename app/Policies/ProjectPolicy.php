<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Project $project): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Project $project): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Project $project): bool
    {
        return $user->is_staff;
    }

    public function restore(User $user, Project $project): bool
    {
        return $user->is_staff;
    }

    public function forceDelete(User $user, Project $project): bool
    {
        return $user->is_superuser;
    }
}
