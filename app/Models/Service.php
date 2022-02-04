<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Service extends Model
{
    use HasFactory,
        SoftDeletes;

    public function technologies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Technology::class);
    }
}
