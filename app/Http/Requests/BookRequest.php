<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'author' => 'required|max:50',
            'description' => 'required',
            'cover' => 'required|image',


        ];
    }

    public function messages(): array
    {
        return [

            'title.required' => 'Inserisci il titolo del libro',
            'title.min' => 'Inserisci un titolo che abbia almeno 3 caratteri',
            'author.required' => 'Inserisci autore',
            'cover.required' => "Inserire un'immagine",
        ];

    }
}
