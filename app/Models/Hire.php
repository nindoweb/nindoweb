<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hire extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'hiring';

    const STATUS_REJECT = 'REJECT';
    const STATUS_APPLY = 'APPLY';
    const STATUS_ACCEPTED = 'ACCEPTED';

    public static array $rules = [
        'name' => ['required', 'string', 'max:255', 'min:2'],
        'email' => ['required', 'email', 'max:255', 'min:2'],
        'job_title' => ['required', 'string', 'max:255', 'min:2'],
        'resume' => ['required', 'min:5', 'max:100', 'mimes:pdf']
    ];
}
