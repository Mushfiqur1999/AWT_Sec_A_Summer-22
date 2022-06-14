<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view('welcome');
    }
    function viewdetails(){
        
        return view('viewdetails');
    }
}
