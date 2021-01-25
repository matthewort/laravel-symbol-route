<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function index() {
    //     return view('layouts.main-layout');
    // }

    public function index() {
        return view('pages.first-blade'); //perché?
    }    

    public function index2() {
        return view('pages.second-blade'); 
    }
    
    public function index3() {
        return view('pages.third-blade'); 
    }    

}
