<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return 'Index';
    }

    public function login(){
        return 'login';
    }

    public function customer(){
        return 'customer';
    }

    public function employee(){
        return 'employee';
    }

    public function report(){
        return 'report';
    }
}
