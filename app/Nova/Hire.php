<?php

namespace App\Nova;

use App\Models\Hire as HireModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;


class Hire extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Hire::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'email';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'email', 'job_title',
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Hiring');
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Hire');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make(__('Name'), 'name')
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->required(),

            Text::make(__('Email'), 'email')
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->required(),

            Text::make(__('Job title'), 'job_title')
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->required(),

            File::make(__('File'), 'file')
                ->hideWhenCreating()
                ->hideWhenUpdating()
                ->required(),

            Boolean::make(__("Was seen"), 'was_seen')
                ->hideWhenCreating(),

            Select::make(__('Status'), 'status')
                ->options([
                    HireModel::STATUS_APPLY => __('Apply'),
                    HireModel::STATUS_ACCEPTED => __('Accepted'),
                    HireModel::STATUS_REJECT => __('Reject'),
                ])->required()
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
        return [];
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
