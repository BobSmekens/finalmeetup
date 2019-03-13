<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Chat;

class ChatController extends Controller
{
    public function index() {
        $chat = \App\Chat::all();

        return view('chat.index');
        // return view('chat.index', [
        //     'chat' => $chat
        // ]);
    }
}
