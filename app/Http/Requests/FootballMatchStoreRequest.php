<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FootballMatchStoreRequest extends FormRequest
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
            'time' => 'required',
            'date' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'football_field_id' => 'required',
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
            'time.required' => 'يجب ادخال الاسم',
            'date.required' => 'يجب ادخال الاسم بالعربي',
            'price.required' => 'يجب ادخال احداثيات خط العرض',
            'capacity.required' => 'يجب ادخال احداثيات خط الطول',
            'football_field_id.required' => 'يجب ادخال الموقع بالانجليزي',
        ];
    }
}
