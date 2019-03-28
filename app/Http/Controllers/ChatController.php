<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use \App\Chat;
use \App\User;

class ChatController extends Controller
{

    public function index($id) {

        $recepient = User::findOrFail($id);

        if(Auth::check()){

            $messages = Chat::with('users')
            // ->where('chatroom_id', '=', '2')
            ->get();
            // ->where('id' , '=', Auth::user()->id)->get();
            // dd(Auth::user()->id);
            // dd($messages[0]->users[0]);
            // dd($messages);
            return view('chat.index', [
                'messages' => $messages,
                'recepient' => $recepient
            ]);
        } else {
            $messages = new Chat;
            $messages->message = "Please log in to use message system";
            $messages->from_user = null;
            $messages->to_user = null;

            return view('chat.index', [
                'messages' => $messages,
                'recepient' => $recepient
            ]);
        }
    }

    public function sendMessage ($id) {

        $chat = new Chat;
        $chat->user = Auth::user()->id;
        $chat->chatroom_id = 3;
        $chat->message = request('message');

        $chat->save();

        return redirect('account/'.$id. '/chat');

        
    }
}
