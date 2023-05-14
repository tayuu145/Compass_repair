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
            'birth' =>  'nullable|present|after:2000/01/01',
            'old_year' => 'required_with:old_month,old_day',
            'old_month' => 'required_with:old_year,old_day',
            'old_day' => 'required_with:old_year,old_month',
            'role' => 'required|integer|max:4',
            'password' => 'required|confirmed|string|between:8,30',
            'password_confirmation' => 'required',

        ];
    }

    public function getValidatorInstance()
    {
        if ($this->input('old_day') && $this->input('old_month') && $this->input('old_year')) {
            $birthDate = implode('-', $this->only(['old_year', 'old_month', 'old_day']));
            $this->merge([
                'birth' => $birthDate,
            ]);
        }

        return parent::getValidatorInstance();
    }
}
