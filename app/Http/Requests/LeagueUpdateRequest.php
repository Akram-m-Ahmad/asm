<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeagueUpdateRequest extends FormRequest
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
            'isHome' => 'required',
            'price' => 'required',
            'details' => 'required',
            'details_ar' => 'required',
            'teams_number' => 'required',
            'team_players_number' => 'required',
            'start_at' => 'required',
            'join_start_at' => 'required',
            'join_end_at' => 'required',
            'city_id' => 'required',
            'football_field_id' => 'required',
            // 'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
            'isHome.required' => 'يجب اختيار اذا كان الدوري ذهاب و إياب',
            'price.required' => 'يجب ادخال السعر',
            'details.required' => 'يجب ادخال التفاصيل بالانجليزي',
            'details_ar.required' => 'يجب ادخال التفاصيل بالعربي',
            'teams_number.required' => 'يجب ادخال عدد الفرق',
            'team_players_number.required' => 'يجب ادخال عدد اللاعبين في الفريق الواحد',
            'start_at.required' => 'يجب ادخال تاريخ بداية الدوري',
            'join_start_at.required' => 'يجب ادخال تاريخ بداية الانضمام',
            'join_end_at.required' => 'يجب ادخال تاريخ نهاية الانضمام',
            'city_id.required' => 'يجب ادخال المدينة',
            'football_field_id.required' => 'يجب ادخال الملعب',
            // 'main_image.required' => 'يجب ادخال صورة العرض ',
        ];
    }
}
