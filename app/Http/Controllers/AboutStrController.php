<?php

namespace App\Http\Controllers;

use App\Models\about_str;
use Illuminate\Http\Request;

class AboutStrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_str = about_str::latest()->paginate(5);

        return view('admin.about_str.index', compact('about_str'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_str.create');
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

     

        about_str::create($input);

        return redirect()->route('about_str.index')
            ->with('success', 'تم اضافة (هيكلية) نظرة عامة بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\about_str  $about_str
     * @return \Illuminate\Http\Response
     */
    public function show(About_str $about_str)
    {
        //
        return view('admin.about_str.show', compact('about_str'));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About_str  $about_str
     * @return \Illuminate\Http\Response
     */
    public function edit(about_str $about_str)
    {
        return view('admin.about_str.edit', compact('about_str'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\about_str  $about_str
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About_str $about_str)
    {
        //
 
        $input = $request->all();
        $about_str->update($input);

        return redirect()->route('about_str.index')
            ->with('success', 'تم تعديل (هيكلية) نظرة عامة  بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about_str  $about_str
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_str $about_str)
    {
        //
        $about_str->delete();
        return redirect()->route('about_str.index')
            ->with('delete', 'تم حذف (هيكلية) نظرة عامة  بنجاح ');
    }
}
