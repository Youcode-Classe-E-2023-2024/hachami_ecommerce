<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','min:6','max:16',Rule::unique('users','name')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required', 'confirmed', 'min:5','max:200']
        ];
    }
    public function messages()
    {
        return [
            'password.confirmed' => 'Password confirmation does not match.',
        ];
    }
}
