<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::latest()->paginate(5);
 
        return view('admin.teams.index', compact('teams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');

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
            $destinationPath = 'storage/images/teams/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Teams::create($input);

        return redirect()->route('teams.index')
            ->with('success', 'تم اضافة   بنجاح ');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teams= Teams::find($id);
        return view('admin.teams.show', compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $teams= Teams::find($id);

        return view('admin.teams.edit', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $teams= Teams::find($id);
       
        $input = $request->all();
        $teams->update($input);

        return redirect()->route('teams.index')
            ->with('success', 'تم تعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams= Teams::find($id);
        $teams->delete();
        return redirect()->route('teams.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
