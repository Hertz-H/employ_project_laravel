<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPagController extends Controller
{
    public function load(){

        return view('template.jobs_page');
    }

    public function loadDetails(){

        return view('template.job_details');
    }
    
}
