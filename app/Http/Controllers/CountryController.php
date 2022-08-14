<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::latest()->paginate(5);

        return view('admin.countries.index', compact('countries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
        $vaildated = $request->validated();

        $input = $request->all();

        if ($image = $request->file('flag_icon')) {
            $destinationPath = 'storage/images/countries/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['flag_icon'] = "$profileImage";
        }

        Country::create($input);

        return redirect()->route('countries.index')
            ->with('success', 'تم اضافة الدولة بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryUpdateRequest $request, Country $country)
    {
        $vaildated = $request->validated();

        $input = $request->all();

        if ($image = $request->file('flag_icon')) {
            $destinationPath = 'storage/images/countries/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['flag_icon'] = "$profileImage";
        }else{
            $input['flag_icon'] = "$country->flag_icon";
        }

        if (File::exists(public_path('storage/images/countries/' . $country->flag_icon))) {
            if($input['flag_icon'] != "$country->flag_icon"){
            File::delete(public_path('storage/images/countries/' . $country->flag_icon));
            }
        }

        $country->update($input);

        return redirect()->route('countries.index')
            ->with('success', 'تم تعديل الدولة بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if (File::exists(public_path('storage/images/countries/' . $country->flag_icon))) {
            File::delete(public_path('storage/images/countries/' . $country->flag_icon));
        }
        $country->delete();
        return redirect()->route('countries.index')
            ->with('delete', 'تم حذف الدولة بنجاح ');
    }
}
