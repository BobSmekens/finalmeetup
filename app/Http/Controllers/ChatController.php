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
            // $messages = Chat::with('users');
            $messages = DB::table('chats')
            ->where('to_user', '=', Auth::user()->id)
            ->orWhere('from_user', '=', Auth::user()->id)
            ->get();

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
        $chat->from_user = Auth::user()->id;
        $chat->to_user = $id;
        $chat->message = request('message');

        $chat->save();

        return redirect('account/'.$id. '/chat');

        
    }
}
