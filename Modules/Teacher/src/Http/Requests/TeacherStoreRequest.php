<?php

namespace Modules\teacher\src\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
{
    /**
     * Determine if the teacher is authorized to make this request.
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
        $rules = [
            'name' => 'required|max:100',
            'slug' => 'required|max:100',
            'description' => 'required|max:255',
            'image' => 'required',
            'exp' => 'required|integer'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => __('teacher::validation.required'),
            'integer' => __('teacher::validation.integer'),
            'max' => __('teacher::validation.max')
        ];
    }

    public function attributes()
    {
        return __('teacher::validation.attributes');
    }
}
