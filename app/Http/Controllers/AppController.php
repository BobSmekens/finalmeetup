<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use \App\Activity;
use \App\User;


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
           // $activity = Activity::with ('users')->post()($id);
            //Activity::with('users')->get();
            $activity = Activity::find($id);
            $user = User::find(Auth::user()->id);
            $activity->users()->save($user);

        }
        return redirect('/activities');
    }

    public function showCalendar() {
        if(Auth::check()){
            // $logged_user = DB::table('users')->where('id', '=', Auth::user()->id)->get()[0]->name;
            // $meetups = DB::table('meetups')
            //             ->where('user_id', '=', $logged_user)->get();
            
            // $activities = Activity::with('users')
            // ->where('id', '=', Auth::user()->id)
            // ->get();
            $user = User::with('activity')
            ->where('id', '=', Auth::user()->id)
            ->first();
            //dd($user);

            //dd($user[0]->activity);

            return view('calender.index', [
                'user' => $user
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
