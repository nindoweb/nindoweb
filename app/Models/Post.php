<?php

namespace App\Models;

use App\Presenters\PostPresenter;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int user_id
 */
class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use PostPresenter;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public static $rules = [
        'title' => ['bail', 'required', 'unique:posts'],
        'category_id' => ['bail', 'required'],
        'content' => ['bail', 'required'],
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
