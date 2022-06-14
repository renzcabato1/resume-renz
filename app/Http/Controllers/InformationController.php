<?php

namespace App\Http\Controllers;
use App\Information;
use App\Education;
use App\Hobby;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //

    public function home()
    {
        $information = Information::first();
        return view('welcome',
        array(
            'header' => 'home',
            'information' => $information,
        ));
    }
    public function resume()
    {
        $information = Information::first();
        $educations = Education::orderBy('id','desc')->get();
        $hobbies = Hobby::get();
        return view('resume',
        array(
            'header' => 'resume',
            'information' => $information,
            'hobbies' => $hobbies,
            'educations' => $educations,
        ));
    }
}
