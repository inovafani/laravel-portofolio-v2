<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    function index(){
        return view('dashboard.profile.index');
    }

    function update(){

    }
}
