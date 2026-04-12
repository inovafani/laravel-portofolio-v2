<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use Illuminate\Http\Request;

class pengaturanHalamaController extends Controller
{
    function index(){
        $datahalaman = halaman::orderBy('judul', 'asc')->get();
        return view("dashboard.pengaturanhalaman.index")->with('datahalaman', $datahalaman);
    }

    function update(){

    }
}
