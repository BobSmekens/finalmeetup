<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Calender;

class CalenderController extends Controller
{

    public function index() {
        return view('calender.index');
    }
}