<?php

namespace App\Policies;

use App\User;
use App\Menu;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the menu.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function view(User $user, Menu $menu)
    {
        //
    }

    /**
     * Determine whether the user can create menus.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->admin == 1;
    }

    /**
     * Determine whether the user can update the menu.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->admin == 1;
    }

    /**
     * Determine whether the user can delete the menu.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function delete(User $user)
    {
      return $user->admin == 1;
    }
}
