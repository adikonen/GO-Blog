<?php

namespace App\Policies;

use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function before(User $user) : ?bool
    {
        #jika null maka akan menjalankan method dari policynya
        return $user->isAdmin ? true : null;
    }

    public function viewAny(User $user)
    {
        #karena sudah di berikan value oleh method before jika false maka method ini akan berjalan
        return Response::deny("Anda dilarang masuk!");    
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PostCategory $postCategory)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PostCategory $postCategory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PostCategory $postCategory)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PostCategory $postCategory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PostCategory $postCategory)
    {
        //
    }
}
