<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\RequestFormNote;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Technology;
use App\Models\User;
use App\Observers\CategoryObserver;
use App\Observers\PostObserver;
use App\Observers\RequestFormNoteObserver;
use App\Observers\ServiceObserver;
use App\Observers\TagObserver;
use App\Observers\TechnologyObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{

    public function register()
    {
    }

    public function boot()
    {
        User::observe(UserObserver::class);
        Category::observe(CategoryObserver::class);
        Post::observe(PostObserver::class);
        Tag::observe(TagObserver::class);
        Technology::observe(TechnologyObserver::class);
        RequestFormNote::observe(RequestFormNoteObserver::class);
        Service::observe(ServiceObserver::class);
    }
}
