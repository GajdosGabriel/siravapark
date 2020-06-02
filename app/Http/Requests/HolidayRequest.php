<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HolidayRequest extends FormRequest {
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
            'estate' => 'string',
            'domes' => 'string',
            'interested' => 'required|string',
//            'buy_from' => 'required|string|max:20',
//            'buy_to' => 'required|string|max:20',
            'rent_from' => 'required|string|max:20',
            'rent_to' => 'required|string|max:20',
            'comment' => 'required|string|max:500',
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:30',
            'country' => 'required|string|min:3|max:3',
            'email' => 'required|email|unique:leads,email|max:70',
        ];
    }
}
