<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;


class LaunchRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email','min:2', 'max:255'],
            'company' => ['required', 'string', 'min:2', 'max:255'],
            'description' => ['string', 'max:4000'],
            'honeypot' => ''
        ];
    }
}
