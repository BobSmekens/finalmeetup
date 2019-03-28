<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use \App\Activity;
use \App\User;
use \App\Chat;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $activities = \App\Activity::all();        
        // $activities = Activity::with('users')->paginate(4);
        $activities = Activity::with('users')->paginate(4);
        $category = "All";
        // dd($activities[3]->users[0]->name);

        return view('activities.index', [
            'activities' => $activities,
            'category'=> $category
        ]);



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $activity = new Activity;
        // $chat = new Chat;
        // $user->update(request(['name', 'email', 'phone', 'photo', 'skills']));
        // $poster = DB::table('users')->where('id', '=', Auth::user()->id)->get();

        dd($activity);
        $activity = $activity->with('users')->find($activity->id);
        dd($activity);
        $activity->activity = request('activity');
        $activity->posted_by = Auth::user()->id;
        $activity->max_persons = request('persons');
        $activity->category = request('category');
        $activity->description = request('description');
        
        $activity->save();
        
        $user_id = Auth::user()->id;
        $activity->users()->attach($user_id);
        $chat_id = $activity->id;
        dd($activity);
        //dd($chat_id);
        $chat->activities()->attach($chat_id);
        $chat->activities()->attach($user_id);



        //return redirect('/activities');
        return redirect('/activities')->with('success', 'activity created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        $allActivityUsers = $activity->users()->get();
        $signedInUser = false;
        foreach ($allActivityUsers as $user){
            if($user->id == Auth::user()->id) {
                $signedInUser = true;
            }
        }
        //$signedInUser = Activity::findOrFail($allActivityUsers);

        
        //dd($signedInUser);
        


        return view('activities.show', [
            'activity' => $activity,
            'signedInUser' =>$signedInUser
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);

        return view('activities.edit', [
            'activity' => $activity
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $activity = Activity::findOrFail($id);

        $activity->activity = request('activity');
        $activity->max_persons = request('persons');
        $activity->category = request('category');
        $activity->description = request('description');

        $activity->update();

        //return redirect('/activities/' . $id);
        return redirect('/activities/' . $id)->with('success', 'activity updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        
        //return redirect('/activities');
        return redirect('/activities')->with('success', 'activity deleted');

    }
}
