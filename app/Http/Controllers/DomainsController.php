<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $domains = Domains::latest()->paginate(5);

        return view('admin.domains.index', compact('domains'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.domains.create');
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

     

        Domains::create($input);

        return redirect()->route('domains.index')
            ->with('success', 'تم اضافة بنجاح ');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domains  $domains
     * @return \Illuminate\Http\Response
     */
    public function show(Domains $domain)
    {
       return view('admin.domains.show', compact('domain'));
         
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domains  $domains
     * @return \Illuminate\Http\Response
     */
    public function edit(Domains $domain)
    {
        //
        return view('admin.domains.edit', compact('domain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domains  $domains
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domains $domain)
    {
        $input = $request->all();
        $domain->update($input);

        return redirect()->route('domains.index')
            ->with('success', 'تم تعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domains  $domains
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domains $domain)
    {
        $domain->delete();
        return redirect()->route('domains.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
