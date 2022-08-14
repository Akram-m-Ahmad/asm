<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;
use App\Models\catdet;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $details = Details ::latest()->paginate(5);
          return view('admin.details.index', compact('details' ))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catdetls= catdet::all();
        return view('admin.details.create', compact( 'catdetls'));

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

     

       Details ::create($input);

        return redirect()->route('details.index')
            ->with('success', 'تم اضافة بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function show(Details $detail)
    {
        
         return view('admin.details.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details=Details::find($id);
        return view('admin.details.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $details=Details::find($id);
        $input = $request->all();
        $details->update($input);

        return redirect()->route('details.index')
            ->with('success', 'تم تعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details=Details::find($id);
        $details->delete();
        return redirect()->route('details.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
