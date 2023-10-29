<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return
         [
            'name'=>'required|min:5|max:10',
            'email'=>'required'
        ];
    }

    public function messages()
    {
        return
        [
            'name.required'=>'Поле є обов`язковим',
            'name.min'=>'Не менше 5 символів',
            'name.max'=>'Не більше 10 символів',

            'email.required'=>'Поле є обов`язковим'
           
        ];
    }
}
