<?php

namespace Modules\Students\src\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountStudentRequest extends FormRequest
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
        $id = auth()->guard('students')->user()->id;
        $rules = [
            'name'=> 'required|max:255',
            'email' => 'required|email|unique:students,email,'.$id,
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'address' => 'nullable'
        ];
        return $rules;
    }

    public function messages()
    {
       return [
            'required' => __('students::validation.required'),
            'email' => __('students::validation.email'),
            'unique' => __('students::validation.unique'),
            'max' => __('students::validation.max'),
            'regex' => __('students::validation.phone-invalid'),
       ];
    }

    public function attributes()
    {
        return [
            'name' => __('students::validation.attributes.name'),
            'email' => __('students::validation.attributes.email'),
            'phone' => __('students::validation.attributes.phone')
        ];
    }

}
