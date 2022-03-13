<?php

namespace App\Http\Requests;

use App\Models\RequestForm;
use Illuminate\Foundation\Http\FormRequest;


class LaunchRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return RequestForm::$rules;
    }
}
