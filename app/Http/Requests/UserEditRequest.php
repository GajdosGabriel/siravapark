<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'email' => 'required|string|max:70|unique:users,email,' . $this->id,
            'phone' => 'required|string|max:20',
            'country' => 'required|string|min:3|max:3',
            'company' => 'max:100',
            'url' => 'max:100',
            'password' => 'nullable|string|min:8|max:20|confirmed'
        ];
    }
}
