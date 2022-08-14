<?php

namespace App\Http\Controllers;

use App\Models\catdet;
use Illuminate\Http\Request;
 

class CatdetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $catdet= catdet::all();
    return view('admin.catdets.index', compact('catdet'))
    ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catdets.create');
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

     

        catdet ::create($input);
 
         return redirect()->route('catdets.index')
             ->with('success', 'تم اضافة بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catdet  $catdet
     * @return \Illuminate\Http\Response
     */
    public function show(catdet $catdet)
    {
        return view('admin.catdets.show', compact('catdet'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catdet  $catdet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catdets=catdet::find($id);
        return view('admin.catdets.edit', compact('catdets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catdet  $catdet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catdets=catdet::find($id);
        $input = $request->all();
        $catdets->update($input);

        return redirect()->route('catdets.index')
            ->with('success', 'تم تعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catdet  $catdet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catdets=catdet::find($id);
        $catdets->delete();
        return redirect()->route('catdets.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
