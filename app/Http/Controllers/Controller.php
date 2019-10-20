<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //home page
    public function shitControl()
    {      
        return view('shit-control');
    }

    //home page
    public function home()
    {      
        return view('welcome');
    }

    //home page
    public function results()
    {      
        return view('results');
    }


    
}


