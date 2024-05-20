<?php

namespace Modules\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'email' => ['required','email','unique:users,email'],
            'group_id' => ['required','integer', function($attribute, $value, $fail) {
                if($value === 0){
                    $fail('Vui lòng chọn nhóm');
                }
            }],
            'password' => ['required', 'min:6']
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute bắt buộc nhập',
            'email' => ':attribute sai định dạng',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute ít nhất :min kí tự',
            'integer' => ':attribute bắt buộc là số'
        ];
    }

    public function attributes() {
        return [
            'name' => 'Tên',
            'email' => 'Email',
            'group_id' => 'Nhóm',
            'password' => 'Mật khẩu'
        ];
    }
}
