<?php

namespace App\Providers;

use App\Nova\Metrics\CategoryCount;
use App\Nova\Metrics\PostCount;
use App\Nova\Metrics\RequestFormCount;
use App\Nova\Metrics\RequestFormNoteCount;
use App\Nova\Metrics\TagCount;
use App\Nova\Metrics\TechnologyCount;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::createUserUsing(function($command) {
            return [
                $command->ask('Name'),
                $command->ask('Email Address'),
                $command->secret('Password'),
            ];
        }, function($name, $email, $password) {
            (new User)->forceFill([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'is_superuser' => true,
                'is_staff' => true,
             ])->save();
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new PostCount(),
            new RequestFormCount(),
            new RequestFormNoteCount(),
            new CategoryCount(),
            new TagCount(),
            new TechnologyCount()
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
