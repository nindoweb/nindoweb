<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Company $company): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Company $company): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Company $company): bool
    {
        return $user->is_staff;
    }

    public function restore(User $user, Company $company): bool
    {
        return $user->is_staff;
    }

    public function forceDelete(User $user, Company $company): bool
    {
        return $user->is_superuser;
    }
}
