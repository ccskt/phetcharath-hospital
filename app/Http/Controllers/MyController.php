<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class MyController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function main()
    {
        $patients_data = patient::all();
        return view('main')->with(compact('patients_data'));
    }
}
