<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryUpdateRequest extends FormRequest
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
            'country_code' => 'required',
            'tax_percentage' => 'required',
            'unit' => 'required',
            'unit_ar' => 'required',
            // 'flag_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'country_code.required' => 'يجب ادخال رمز الدولة',
            'tax_percentage.required' => 'يجب ادخال نسبة الضريبة كرقم فقط',
            'unit.required' => 'يجب ادخال وحدة السعر',
            'unit_ar.required' => 'يجب ادخال وحدة السعر بالعربي',
            // 'flag_icon.required' => 'يجب ادخال صورة العلم'
        ];
    }
}
