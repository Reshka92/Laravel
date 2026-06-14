<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       
    
    return[
        'name' => 'required|min:2|max:50',
        'email' => 'required',
        'subject' => ['required','min:2','max:100'],
        'message' => ['required','min:2','max:100'],
    ];      
    }
    public function messages(): array
    {
        return[
            'name.required' => 'Пожалуйста введите имя', 
            'email.required' => 'Пожалуйста введите email',
            'subject.required' => 'Пожалуйста введите subject',
            'message.required' => 'Пожалуйста введите message',
            'name.min' => 'Пожалуйста введите message + 1 сивол',
        ];
    }
    
}
