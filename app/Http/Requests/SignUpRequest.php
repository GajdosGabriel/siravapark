<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest {
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
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:30',
            'country' => 'required|string|min:3|max:3',
            'email' => 'required|email|max:70',
            'message' => 'required|string|min:20|max:500',
        ];
    }
}