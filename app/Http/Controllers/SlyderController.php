<?php

namespace App\Http\Controllers;

use App\Models\Slyder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlyderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= Slyder::all();
        return view('admin.slider.index', compact('sliders'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storage/images/sliders/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Slyder::create($input);

        return redirect()->route('slider.index')
            ->with('success', 'تم اضافة   بنجاح ');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slyder  $slyder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sliders= Slyder::find($id);
        return view('admin.slider.show', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slyder  $slyder
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $sliders= Slyder::find($id);

        return view('admin.slider.edit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slyder  $slyder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sliders=  Slyder::find($id);

 
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storage/images/sliders/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            $input['image'] = "$image->image";
        }

        if (File::exists(public_path('storage/images/slyders/' . $sliders->image))) {
            if($input['image'] != "$sliders->flag_icon"){
            File::delete(public_path('storage/images/slyders/' . $sliders->image));
            }
        }

        $sliders->update($input);

        return redirect()->route('slider.index')
            ->with('success', 'تم تعديل   بنجاح ');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slyder  $slyder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders= Slyder::find($id);
        $sliders->delete();
        return redirect()->route('slider.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
