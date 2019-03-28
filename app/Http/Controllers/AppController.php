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
        // $activities = \App\Activity::all();        
        $activities = Activity::with('users')->where('category' , '=', 'Chillup') ->paginate(4);
        $category = "Chillup";
        // dd($activities[3]->users[0]->name);

        return view('activities.index', [
            'activities' => $activities,
            'category'=> $category
        ]);



    }
    public function indexSkillup()
    {
        // $activities = \App\Activity::all();        
        $activities = Activity::with('users')->where('category' , '=', 'Skillup') ->paginate(4);
        $category = "Skillup";

        // dd($activities[3]->users[0]->name);

        return view('activities.index', [
            'activities' => $activities,
            'category'=> $category
            
        ]);



    }
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
            //$checkSignUp = Activity::with('users')->where('user_id' , '=' , Auth::user()->id)->get();
            //dd($checkSignUp);
        }
      //  return redirect('/activities');

              return redirect('/activities/' . $activity->id);
    }

    public function showCalendar(Activity $activity) {
        if(Auth::check()){
            $ownActivities= Activity::with('users')->where('posted_by' , '=', Auth::user()->id)->get();
            $notOwnActivities = Activity::with('users')
            ->where('posted_by' , '!=', Auth::user()->id)
            ->get();
            // ->users();
            // dd($notOwnActivities);
            //$userArray = $notOwnActivities[0]->users();

//dd($notOwnActivities);
            return view('calender.index', [
                'ownActivities' => $ownActivities,
                'notOwnActivities' => $notOwnActivities

                
            ]);
        };
    }

    // public function showCalendar() {
    //     if(Auth::check()){

    //         // $activities = Activity::with('users')
    //         // ->where('id', '=', Auth::user()->id)
    //         // ->get();
    //         $user = User::with('activity')
    //         ->where('id', '=', Auth::user()->id)
    //         ->where('posted_by', '=', Auth::user()->id)
    //         ->first();
    //         dd($user);

    //         //dd($user[0]->activity);

    //         return view('calender.index', [
    //             'user' => $user
    //         ]);
    //     };
    // }



    public function deleteCalendarItem(Activity $activity) {

        //dd($activity);

        $user_id = \Auth::user()->id;

        dd($user_id);

        $activity->users()->detach([$user_id]);

        // $user = User::with('activity')
        //     ->where('id', '=', Auth::user()->id)
        //     ->first();

        // $user->activity()->detach($user);
        // dd($user);
        // ;

        return redirect('/calendar')->with('success', 'You  unsubscribed from the activity');;
        
    }
    public function unsubActivity($id) {
        // dd($id);
        $user = User::with('activity')
            ->where('id', '=', Auth::user()->id)
            ->first();

        $user->activity()->detach($user);

        return redirect('/activities')->with('success', 'You  unsubscribed from the activity');;
        
    }

    public function loggedInSucces (){
        return redirect('/')->with('success', 'You are succesfully logged in');
    }
}
