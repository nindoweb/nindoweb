<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property mixed|string code
 * @property string $name
 * @property string $sub_name
 */
class Service extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'name', 'code', 'content'
    ];

    public array $append = [
        'fullName'
    ];

    public function getFullNameAttribute(): string
    {
        return $this->name.' '.$this->sub_name;
    }

    public function technologies(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
