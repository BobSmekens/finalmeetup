<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use \App\Activity;
use \App\Meetup;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = \App\Activity::all();

        // return view('account.index');
        return view('activities.index', [
            'activities' => $activities
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
    public function store(Request $request)
    {
        $activity = new Activity;
        // $user->update(request(['name', 'email', 'phone', 'photo', 'skills']));
        // $poster = DB::table('users')->where('id', '=', Auth::user()->id)->get();
        $activity->activity = request('activity');
        $activity->posted_by = Auth::user()->id;
        $activity->max_persons = request('persons');
        $activity->category = request('category');
        $activity->description = request('description');
   

        $activity->save();
       $newMeetup = new Meetup;
       $newMeetup->user_id = Auth::user()->id;
       $newMeetup->activity_id = $activity->id;

       $newMeetup->save();
    
       //$meetup->user_id = $activity->posted_by;

        return redirect('/activities');
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

        return view('activities.show', [
            'activity' => $activity
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

        return redirect('/activities/' . $id);
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

        return redirect('/activities');
    }
}
