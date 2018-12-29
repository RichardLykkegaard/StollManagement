<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Lists all routes
    public function index(){
        //Returns view
        return view('pages.index');
    }
    
    public function customer(){
        //Returns view
        return view('pages.customer');
    }

    public function employee(){
        //Returns view
        return view('pages.employee');
    }

    public function report(){
        //Returns view
        return view('pages.report');
    }

    public function main(){
        //Returns view
        return view('pages.main');
    }
}
