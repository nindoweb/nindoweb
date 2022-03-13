<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestForm extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['email', 'company', 'description'];

    public static array $rules = [
        'email' => ['required', 'email','min:2', 'max:255'],
        'company' => ['required', 'string', 'min:2', 'max:255'],
        'description' => ['string', 'max:4000']
    ];

    public function requestFormNotes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RequestFormNote::class);
    }
}
