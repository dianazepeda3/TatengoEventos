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

    public function admin(User $user)
    {
        return $user->isAdmin();
    }

    public function administrar(User $user){
        return $user->isAdmin() || $user->isEmpleado();
    }

    public function update(User $user)
    {
        return $user->isAdmin
        ? Response::allow()
        : Response::deny('No tienes permiso para editar el
        registro');
    }

   
}
