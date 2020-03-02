<?php

namespace App\Policies;

use App\Models\Statuses;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusesPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Statuses $statuses)
    {
        return $user->id === $statuses->user_id;
    }
}
