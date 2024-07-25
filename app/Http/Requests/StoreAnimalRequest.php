<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            'nome' => ['min:2', 'max:79'],
            'specie' => ['required', 'min:3', 'max:49'],
            'razza' => ['min:2', 'max:49', 'nullable'],
            'eta' => ['integer', 'min:1', 'max:5', 'nullable'],
            'sesso' => ['required', 'min:1', 'max:19'],
            'colore' => ['min:2', 'max:49', 'nullable'],
            'peso' => ['decimal:1,8', 'nullable'],
            'altezza' => ['decimal:1,8', 'nullable'],
            'url_img' => ['url', 'nullable'],
            'info' => ['min:3', 'nullable'],
        ];
    }

    public function messages(){

        return [
        'nome' => 'Devi inserire un nome valido!',
        ];

}
}
