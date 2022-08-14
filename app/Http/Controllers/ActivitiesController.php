<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activities::latest()->paginate(5);

        return view('admin.activities.index', compact('activities'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

     

        Activities::create($input);

        return redirect()->route('activities.index')
            ->with('success', 'تم اضافة بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(Activities $activity)
    {
        //$activities=Activities::find(id);
        
       return view('admin.activities.show', compact('activity'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit(Activities $activity)
    {
        //
        return view('admin.activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activities $activity)
    {
        //
        $input = $request->all();
        $activity->update($input);

        return redirect()->route('activities.index')
            ->with('success', 'تم تعديل بنجاح ');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activities $activity)
    {
        //
        $activity->delete();
        return redirect()->route('activities.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
    public function front()
    {
        $activities= Activities::all();
        return  view('home.index',compact('activities'));
        
    }
}
