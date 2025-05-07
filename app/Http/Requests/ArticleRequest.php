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
            'titolo'=> 'required|string|max:255',
            'data'=> 'required|date',
            'introduzione'=> 'required|string|max:255',
            'contenuto'=> 'required|string|max:65000',
            'autore'=> 'required|string|max:50',
            'immagine'=> 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }
    public function messages(): array {
        return [
            'titolo.required'=> 'il titolo è pbbligatorio!',
            'data.required'=> 'La data è obbligatoria!',
            'introduzione.required'=> 'Obbligatorio!',
            'contenuto.required'=> 'Obbligatorio!',
            'autore.required'=> 'Obbligatorio!',
            'immagine.required'=>'L\'immagine è obbligatoria',
            'immagine.image'=> 'Il file caricato deve essere obbligatoriamente un\'immagine',
            'immagine.mimes'=> '',
            'immagine.max'=>'',
        ];
    }
}
