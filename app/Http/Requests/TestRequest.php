<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|string|max:30',
            'under_name_kana' => 'required|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u|string|max:30',
            'mail_address' => 'required|string|email|max:100|unique:users',
            'sex' => 'required|integer|max:3',

            'old_year' => 'nullable|present|numeric|required_with:month,day',
            'old_month' => 'nullable|present|numeric|required_with:year,day',
            'old_day' => 'nullable|present|numeric|required_with:year,month',
            'role' => 'required|integer|max:4',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
