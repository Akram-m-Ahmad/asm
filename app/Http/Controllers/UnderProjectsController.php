<?php

namespace App\Http\Controllers;

use App\Models\under_projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UnderProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $under_projects= under_projects::all();
        return 
    view('admin.under_project.index', compact('under_projects'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.under_project.create');

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
            $destinationPath = 'storage/images/under_projects/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        under_projects::create($input);

        return redirect()->route('under_project.index')
            ->with('success', 'تم اضافة   بنجاح ');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\under_projects  $under_projects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $under_projects= under_projects::find($id);
        return view('admin.under_project.show', compact('under_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\under_projects  $under_projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $under_projects= under_projects::find($id);

        return view('admin.under_project.edit', compact('under_projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\under_projects  $under_projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $under_projects=  under_projects::find($id);

 
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storage/images/under_projects/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            $input['image'] = "$under_projects->flag_icon";
        }

        if (File::exists(public_path('storage/images/under_projects/' . $under_projects->image))) {
            if($input['image'] != "$under_projects->image"){
            File::delete(public_path('storage/images/under_projects/' . $under_projects->image));
            }
        }

        $under_projects->update($input);

        return redirect()->route('under_project.index')
            ->with('success', 'تم تعديل   بنجاح ');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\under_projects  $under_projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $under_projects= under_projects::find($id);
        $under_projects->delete();
        return redirect()->route('under_project.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
    }

