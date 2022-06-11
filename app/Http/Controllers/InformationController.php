<?php

namespace App\Http\Controllers;
use App\Information;
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
        return view('resume',
        array(
            'header' => 'resume',
            'information' => $information,
        ));
    }
}
