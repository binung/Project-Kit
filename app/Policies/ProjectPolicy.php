<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;

class ProjectPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Project $project): bool
    {
        return $post->user()->is($user);
    }

    public function delete(User $user, Project $project): bool
    {
        return $this->update($user, $post);
    }
}
