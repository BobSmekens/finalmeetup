<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Chat;

class ChatController extends Controller
{

    public function index() {
        return view('chat.index');
    }
}
