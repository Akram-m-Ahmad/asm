<?php

namespace App\Http\Controllers;
use App\Models\Contacts;
use App\Models\Activities;
use App\Models\Teams;
use Illuminate\Http\Request;
use App\Models\Domains;
use App\Models\Details;
use App\Models\pre_projects;
use App\Models\under_projects;
use App\Models\Statistics;
use App\Models\Media;
use App\Models\about_str;

class FrontController extends Controller
{
    //
    public function front()
    {
        $contacts= Contacts::all();
        $activities=Activities::all();
        $teams=Teams::all();
        $domains=Domains::all();
        $details=Details::all();
        $pre_projects=pre_projects::all();
        $under_projects=under_projects::all();
        $statistics=Statistics::all();
        $media=Media::all();
        $about_str=about_str::all();
        return  view('home.index',compact('contacts','activities','teams','domains','details'
        ,'pre_projects','under_projects','statistics','media','about_str'));
        
    
     }
     
}
