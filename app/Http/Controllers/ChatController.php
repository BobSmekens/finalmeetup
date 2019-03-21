<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use \App\Chat;

class ChatController extends Controller
{

    public function index() {



        if(Auth::check()){
            $messages = DB::table('chat')->where('to_user', '=', Auth::user()->id)->get();
            // dd($messages);

            return view('chat.index', [
                'messages' => $messages
            ]);
        } else {
            $messages = new Chat;
            $messages->message = "Please log in to use message system";
            return view('chat.index', [
                'messages' => $messages
            ]);
        }
    }
}
