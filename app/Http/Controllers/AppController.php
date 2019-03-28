<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use \App\Activity;
use \App\User;


class AppController extends Controller
{
    public function indexChillup()
    {       
        $activities = Activity::with('users')->where('category' , '=', 'Chillup') ->paginate(4);
        $category = "Chillup";

        return view('activities.index', [
            'activities' => $activities,
            'category'=> $category
        ]);
    }

    public function indexSkillup()
    {      
        $activities = Activity::with('users')->where('category' , '=', 'Skillup') ->paginate(4);
        $category = "Skillup";

        return view('activities.index', [
            'activities' => $activities,
            'category'=> $category
        ]);
    }

    public function showWelcome() {
        if(Auth::check()){
            $user = DB::table('users')->where('id', '=', Auth::user()->id)->get();

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
        };
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
            $activity = Activity::find($id);
            $user = User::find(Auth::user()->id);
            $activity->users()->save($user);
        }

        return redirect('/activities/' . $activity->id);
    }

    public function showCalendar(Activity $activity) {
        if(Auth::check()){
            $ownActivities= Activity::with('users')->where('posted_by' , '=', Auth::user()->id)->get();
            $notOwnActivities = Activity::with('users')
            ->where('posted_by' , '!=', Auth::user()->id)
            ->get();

            return view('calender.index', [
                'ownActivities' => $ownActivities,
                'notOwnActivities' => $notOwnActivities 
            ]);
        };
    }

    public function deleteCalendarItem(Activity $activity) {
        $user_id = \Auth::user()->id;
        $activity->users()->detach([$user_id]);

        return redirect('/calendar')->with('success', 'You  unsubscribed from the activity');;
    }

    public function unsubActivity(Activity $activity) {
        $user_id = \Auth::user()->id;
        $activity->users()->detach([$user_id]);

        return redirect('/activities/'.$activity->id)->with('success', 'You  unsubscribed from the activity');;
    }

    public function loggedInSucces (){
        return redirect('/')->with('success', 'You are succesfully logged in');
    }
}
