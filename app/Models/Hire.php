<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hire extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'hiring';
    protected $fillable = [
        'name',
        'email',
        'job_title',
        'file',
        'was_seen',
        'status'
    ];

    const STATUS_REJECT = 'REJECT';
    const STATUS_APPLY = 'APPLY';
    const STATUS_ACCEPTED = 'ACCEPTED';

    public static array $rules = [
        'name' => ['required', 'string', 'max:255', 'min:2'],
        'email' => ['required', 'email', 'max:255', 'min:2'],
        'job_title' => ['required', 'string', 'max:255', 'min:2'],
        'file' => ['required', 'min:5', 'max:100', 'mimes:pdf']
    ];
}
