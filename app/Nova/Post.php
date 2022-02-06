<?php

namespace App\Nova;

use App\Nova\Metrics\PostCount;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable()->hideFromIndex(),

            Image::make(__('Image'), 'image')
                ->disk('public')
                ->creationRules('required', 'max:5000', 'min:50')
                ->prunable(),

            BelongsTo::make(__('Category'), 'category'),

            Text::make(__("Title"), 'title')
                ->creationRules(\App\Models\Post::$rules['title'])
                ->updateRules('required', 'unique:posts,title,{{resourceId}}'),

            Slug::make(__('Slug'), 'slug')
                ->from('title')
                ->hideFromIndex()
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            Text::make(__('Code'), 'code')
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->hideFromIndex()
                ->exceptOnForms(),

            BelongsTo::make(__('User'), 'user')
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            BelongsToMany::make(__("Tags"), 'tags'),

            Trix::make(__('Content'), 'content'),

            DateTime::make(__('Published At'), 'published_at')
                ->creationRules('required', 'after_or_equal:now')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new PostCount()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
