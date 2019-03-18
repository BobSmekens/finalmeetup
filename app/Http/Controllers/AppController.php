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
            $userobj = new User;

            $user = [$userobj];
            $user[0]->name = 'new meeter';

            return view('home', [
                'user' => $user
            ]);
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

            $meetup->activity_id = $activity->id;
            $meetup->user_id = $activity->posted_by;


            $meetup->save();
        }
        return redirect('/activities');
    }

    public function showCalendar() {
        if(Auth::check()){
            $logged_user = DB::table('users')->where('id', '=', Auth::user()->id)->get()[0]->name;
            $meetups = DB::table('meetups')
                        ->where('user_id', '=', $logged_user)->get();

            return view('calender.index', [
                'meetups' => $meetups
            ]);
        };
    }

    public function deleteCalendarItem($id) {
        // dd($id);
        $meetup = Meetup::findOrFail($id);
        $meetup->delete();

        return redirect('/calendar');
    }
}
