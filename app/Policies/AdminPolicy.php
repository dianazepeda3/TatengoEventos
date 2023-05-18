<?php

namespace App\Policies;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\User;

class AdminPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function delete(User $user)
    {
        return $user->isAdmin();
    }

   
}
