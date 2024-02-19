<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name' => 'required|min:4',
            'price' => 'required',
            'mail' => 'required',
            'description' => 'required|min:15',
            'object' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome deve essere obbligatorio',
            'price.required' => 'Il prezzo deve essere obbligatorio',
            'mail.required' => 'La mail deve essere obbligatoria',
            'description.required' => 'La descrizione deve essere obbligatoria',
            'object.required' => 'L oggetto deve essere obbligatorio',
            'name.min' => 'Il nome deve avere almeno 4 caratteri',
            'description.min' => 'La descrizione deve avere almeno 15 caratteri',
        ];
    }
}
