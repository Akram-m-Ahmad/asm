<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityUpdateRequest extends FormRequest
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
            'name' => 'required',
            'name_ar' => 'required',
            'country_id' => 'required',
        ];
    }


      /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'يجب ادخال الاسم',
            'name_ar.required' => 'يجب ادخال الاسم بالعربي',
            'country_id.required' => 'يجب ادخال رمز الدولة',
        ];
    }
}
