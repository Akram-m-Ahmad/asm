<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeagueTeamStoreRequest extends FormRequest
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
            'league_id' => 'required',
            'name' => 'required',
            'name_ar' => 'required',
            'flag_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
            'league_id.required' => 'يجب اختيار الدوري',
            'name.required' => 'يجب ادخال الاسم',
            'name_ar.required' => 'يجب ادخال الاسم بالعربي',
            'flag_icon.required' => 'يجب ادخال صورة العلم ',
        ];
    }
}
