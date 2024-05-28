<?php

namespace Modules\Students\src\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $id = $this->route()->id;

        $rules = [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email'],
            'password' => ['required', 'min:6'],
            'address' => ['max:200'],
            'phone' => ['max:20'],
        ];

        if ($id) {
            $rules['email'] = ['required', 'email', 'unique:users,email,'.$id];

            if ($this->password) {
                $rules['password'] = 'min:6';
            } else {
                unset($rules['password']);
            }
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => __('user::validation.required'),
            'email' => __('user::validation.email'),
            'unique' => __('user::validation.unique'),
            'min' => __('user::validation.min'),
            'integer' => __('user::validation.integer'),
            'max' => __('user::validation.max')
        ];
    }

    public function attributes()
    {
        return __('students::validation.attributes');
    }

}
