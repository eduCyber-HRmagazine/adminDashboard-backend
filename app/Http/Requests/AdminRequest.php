<?php

namespace App\Http\Requests;

use App\Enums\AdminPosition;
use App\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class AdminRequest extends FormRequest
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
            'firstName' => 'required|string|max:255',
            'secondName' => 'required|string|max:255',
            'gender' => ['required', new Enum(Gender::class)],
            'email' => "required|email|unique:users,email,{$this->slug},slug",
            'password' => 'sometimes|string|min:8|confirmed',
            'mobile' => 'nullable|string',
            'position' => ['required', new Enum(AdminPosition::class)],
            'image' => 'sometimes',
            'oldImage' => 'sometimes',
            'active' => 'sometimes',
        ];
    }
}
