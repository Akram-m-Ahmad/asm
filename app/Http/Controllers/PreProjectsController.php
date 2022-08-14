<?php

namespace App\Http\Controllers;

use App\Models\pre_projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PreProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pre_projects= pre_projects::all();
        return 
    view('admin.pre_project.index', compact('pre_projects'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pre_project.create');
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
            $destinationPath = 'storage/images/pre_projects/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        pre_projects::create($input);

        return redirect()->route('pre_project.index')
            ->with('success', 'تم اضافة   بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pre_projects  $pre_projects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pre_projects= pre_projects::find($id);
        return view('admin.pre_project.show', compact('pre_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pre_projects  $pre_projects
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $pre_projects= pre_projects::find($id);

        return view('admin.pre_project.edit', compact('pre_projects'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pre_projects  $pre_projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $pre_projects=  pre_projects::find($id);

 
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storage/images/pre_projects/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            $input['image'] = "$under_projects->flag_icon";
        }

        if (File::exists(public_path('storage/images/pre_projects/' . $pre_projects->image))) {
            if($input['image'] != "$$under_projects->image"){
            File::delete(public_path('storage/images/pre_projects/' . $pre_projects->image));
            }
        }

        $pre_projects->update($input);

        return redirect()->route('pre_project.index')
            ->with('success', 'تم تعديل   بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pre_projects  $pre_projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(  $id)
    {
       
        $pre_projects= pre_projects::find($id);
        $pre_projects->delete();
        return redirect()->route('pre_project.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
