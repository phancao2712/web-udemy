<?php

namespace Modules\Students\src\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordStudentRequest extends FormRequest
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
    public function rules()
    {
        return [
            "old_password" => [
                "required",
                function ($attribute, $value, $fail) {
                    $status = Hash::check($value, auth()->guard("students")->user()->password);
                    if (!$status) {
                        $fail(__("students::validation.password-invalid"));
                    }
                }
            ],
            "password" => 'required|min:6',
            "confirm_password" => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'required' => __('students::validation.required'),
            'min' => __('students::validation.min'),
            'same' => __('students::validation.same'),
        ];
    }

    public function attributes()
    {
        return __('students::validation.attributes');
    }

}
