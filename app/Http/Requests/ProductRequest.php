<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'project_name' => ['required', 'string', 'max:255'],
            'preview_link' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'repo_link' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'],
            'price' => ['required', 'numeric'],
            'publish_now' => ['required', 'string'],
        ];
    }
}
