<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }
    public function about()
    {
        return view('frontend.pages.company');
    }
    public function service()
    {
        return view('frontend.pages.service');
    }
    public function career()
    {
        return view('frontend.pages.career');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function schedule_service()
    {
        return view('frontend.pages.schedule_service');
    }

}
