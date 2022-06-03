<?php

namespace App\Providers;

use App\Models\PostCategory;
use App\Policies\PostCategoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
       PostCategory::class => PostCategoryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("view-index-post-category", [PostCategoryPolicy::class, "viewAny"]);
        Gate::define("create-post-category", [PostCategoryPolicy::class, 'create']);
        
    }
}
