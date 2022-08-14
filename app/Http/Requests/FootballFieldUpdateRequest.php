<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FootballFieldUpdateRequest extends FormRequest
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
            'lng' => 'required',
            'lat' => 'required',
            'location' => 'required',
            'location_ar' => 'required',
            'area' => 'required',
            'details' => 'required',
            'details_ar' => 'required',
            'city_id' => 'required',
            'isActive' => 'required',
            'user_id' => 'required',
            'first_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'second_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'third_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
            'lng.required' => 'يجب ادخال احداثيات خط العرض',
            'lat.required' => 'يجب ادخال احداثيات خط الطول',
            'location.required' => 'يجب ادخال الموقع بالانجليزي',
            'location_ar.required' => 'يجب ادخال الموقع بالعربي',
            'area.required' => 'يجب ادخال المساحة',
            'details.required' => 'يجب ادخال التفاصيل بالانجليزي',
            'details_ar.required' => 'يجب ادخال التفاصيل بالعربي',
            'city_id.required' => 'يجب ادخال المدينة',
            'isActive.required' => 'يجب ادخال الحالة',
            'first_image.required' => 'يجب ادخال الصورة الاولى ',
            'second_image.required' => 'يجب ادخال الصورة الثانية',
            'third_image.required' => 'يجب ادخال الصورة الثالثة',
            'user_id.required' => 'يجب ادخال مالك الملعب',
        ];
    }
}
