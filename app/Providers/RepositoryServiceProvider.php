<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TypeUserRepository::class, \App\Repositories\TypeUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserTypeUserRepository::class, \App\Repositories\UserTypeUserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CourseRepository::class, \App\Repositories\CourseRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InstutionsRepository::class, \App\Repositories\InstutionsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CourseEventsRepository::class, \App\Repositories\CourseEventsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InstutionRepository::class, \App\Repositories\InstutionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ArticleRepository::class, \App\Repositories\ArticleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ParticipationRepository::class, \App\Repositories\ParticipationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserEventRepository::class, \App\Repositories\UserEventRepositoryEloquent::class);
        //:end-bindings:
    }
}
