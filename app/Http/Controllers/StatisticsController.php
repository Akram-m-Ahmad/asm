<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics =Statistics::latest()->paginate(5);
 
        return view('admin.statistics.index', compact('statistics'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statistics.create');

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

        

        Statistics::create($input);

        return redirect()->route('statistics.index')
            ->with('success', 'تم اضافة   بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statistics= Statistics::find($id);
        return view('admin.statistics.show', compact('statistics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $statistics= Statistics::find($id);

        return view('admin.statistics.edit', compact('statistics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $statistics= Statistics::find($id);
       
        $input = $request->all();
        $statistics->update($input);

        return redirect()->route('statistics.index')
            ->with('success', 'تم تعديل بنجاح ');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $statistics= Statistics::find($id);
        $statistics->delete();
        return redirect()->route('statistics.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
