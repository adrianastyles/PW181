<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibros extends FormRequest
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
            'txtISBN' => 'required|numeric|min:13',
            'txtTitulo' => 'required|max:50',
            'txtAutor' => 'required|max:25',
            'txtPaginas' => 'required|numeric',
            'txtEditorial' => 'required|max:50',
            'txtEmail' => 'required|email',
        ];
    }
}