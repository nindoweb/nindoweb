<?php

namespace App\Policies;

use App\Models\RequestFormNote;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestFormNotePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, RequestFormNote $requestFormNote): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, RequestFormNote $requestFormNote): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, RequestFormNote $requestFormNote): bool
    {
        return $user->is_superuser;
    }

    public function restore(User $user, RequestFormNote $requestFormNote): bool
    {
        return $user->is_superuser;
    }

    public function forceDelete(User $user, RequestFormNote $requestFormNote): bool
    {
        return $user->is_superuser;
    }
}
