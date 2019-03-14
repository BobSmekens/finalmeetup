<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use \App\Activity;
use \App\User;
use \App\Meetup;

class AppController extends Controller
{
    public function showWelcome() {
        if(Auth::check()){
            $user = DB::table('users')->where('id', '=', Auth::user()->id)->get();
            
            // dd($user);
            return view('home', [
                'user' => $user
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function showSignup() {
        return view('auth.register');
    }

    public function addToMeetup($id)
    {
        if(Auth::check()){
        $activity = Activity::findOrFail($id);
        $meetup = new Meetup;

        $meetup->user_id1 = $activity->posted_by;
        $meetup->user_id2 = Auth::user()->id;
        $meetup->activity_id = $activity->activity;
            // dd($meetup);
        $meetup->save();
        }
        return redirect('/');
    }
}
