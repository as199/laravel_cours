<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:contacts,email,' . $this->contact->id,
            'phone' => 'required|string|min:9|max:12|unique:contacts,phone, ' . $this->contact->id,
            'address' => 'required|string|min:3|max:255',
            'zip' => 'required|string|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est requis',
            'name.string' => 'Le nom doit être une chaîne de caractères',
            'name.min' => 'Le nom doit contenir au moins 3 caractères',
            'name.max' => 'Le nom doit contenir au plus 255 caractères',
            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email doit être une adresse email valide',
            'email.unique' => 'L\'email existe déjà',
            'phone.required' => 'Le numéro de téléphone est requis',
            'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères',
            'phone.min' => 'Le numéro de téléphone doit contenir au moins 9 caractères',
            'phone.max' => 'Le numéro de téléphone doit contenir au plus 12 caractères',
            'phone.unique' => 'Le numéro de téléphone existe déjà',
        ];
    }
}
