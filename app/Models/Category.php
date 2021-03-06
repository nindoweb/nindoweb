<?php

namespace App\Models;

use App\Presenters\CategoryPresenter;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed user_id
 * @property mixed|string code
 */
class Category extends Model
{
    use HasFactory,
        CategoryPresenter,
        Sluggable,
        SoftDeletes;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
