<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ 
            'title' => 'required|min:5|max:150',
            'content' => 'required',
            'slug' => 'required|unique:posts'
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'title.required' => ':attribute es requerido',
    //         'content.required' => ':attribute es requerido',
    //         'slug.unique' => 'This :attribute is already taken'
    //     ];
    // }

    //  public function attributes(): array{
    //     return [
    //         'title' => 'Titulo',
    //         'content' => 'Contenido',
    //         'slug' => 'Slug'
    //     ];
    //  }
}
