<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function projects_scroll(){
        return view('pages.projects_scroll');
    }

    public function singular_project(){
        return view('pages.single');
    }

    public function gallery(){
        return view('pages.gallery');
    }
}
