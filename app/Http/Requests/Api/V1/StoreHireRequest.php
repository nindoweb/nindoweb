<?php

namespace App\Http\Requests\Api\V1;

use App\Models\Hire;
use Illuminate\Foundation\Http\FormRequest;

class StoreHireRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return Hire::$rules;
    }
}
