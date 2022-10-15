<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome'); 
    }
    public function facuilties(){
        return view('pages.facuilties'); 
    }
    public function lecturers(){
        return view('pages.lecturers'); 
    }
    public function courses(){
        return view('pages.courses'); 
       }
}
