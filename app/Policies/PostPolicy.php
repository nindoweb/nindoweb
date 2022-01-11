<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Post $post): bool
    {
        return $user->id == $post->user_id || $user->is_superuser;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Post $post): bool
    {
        return $user->id == $post->user_id || $user->is_superuser;
    }

    public function delete(User $user, Post $post): bool
    {
        return $user->id == $post->user_id || $user->is_superuser;
    }

    public function restore(User $user, Post $post): bool
    {
        return $user->id == $post->user_id || $user->is_superuser;
    }

    public function forceDelete(User $user, Post $post): bool
    {
        return $user->is_superuser;
    }
}
