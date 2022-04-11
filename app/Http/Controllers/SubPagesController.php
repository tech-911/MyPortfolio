<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubPagesController extends Controller
{
    //
    public function education(){
        return view('pages.about.education');
    }

    public function expertise(){
        return view('pages.about.expertise');
    }

    public function experiences(){
        return view('pages.about.experiences');
    }

    public function volunteer_services(){
        return view('pages.about.volunteer');
    }

    public function recommendations(){
        return view('pages.about.recommendations');
    }
}
