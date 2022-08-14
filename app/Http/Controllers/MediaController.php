<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::latest()->paginate(5);
 
        return view('admin.media.index', compact('medias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
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

        if ($image = $request->file('video')) {
            $destinationPath = 'storage/images/medias/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['video'] = "$profileImage";
        }

        Media::create($input);

        return redirect()->route('media.index')
            ->with('success', 'تم اضافة   بنجاح ');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $medias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medias= Media::find($id);
   return view('admin.media.show', compact('medias'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $medias= Media::find($id);

        return view('admin.media.edit', compact('medias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medias= Media::find($id);
       
        $input = $request->all();
        $medias->update($input);

        return redirect()->route('media.index')
            ->with('success', 'تم تعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $medias
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $medias= Media::find($id);
        $medias->delete();
        return redirect()->route('media.index')
            ->with('delete', 'تم حذف   بنجاح ');
    }
}
