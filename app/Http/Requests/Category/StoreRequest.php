<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
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

     public function prepareForValidation()
     {
        // $this = $request
        $this->merge([
            'slug' => Str::slug($this->name, '-', 'en'),
        ]);
     }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:5',
                'max:50',
            ],
            'slug' => [
                'required',
                Rule::unique('categories', 'slug')->ignore($this->category),
            ],
        ]; 
    }

    public function passedValidation()
    {
        //
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Por favor, ingresa un nombre para la categoria.',
            'name.min' => 'El nombre de la categoria debe contener al menos 5 caracteres.',
            'name.max' => 'El nombre de la categoria no puede exceder los 50 caracteres.',
            'name.string' => 'El nombre de la categoria debe ser una cadena de texto.',
            'slug.required' => 'Fallo en el slug',
            'slug.unique' => 'Slug debe ser unico',
         ];
    }
}
