<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Account;
use \App\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();

        // return view('account.index');
        return view('account.index', [
            'users' => $users
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('account.show', [
            'user' => $user
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
        $user = User::findOrFail($id);

        return view('account.edit', [
            'user' => $user
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(user $user, Request $request, $id)
    {
        $request->photo->store('public/photos');

        $user = User::findOrFail($id);
        // $user->update(request(['name', 'email', 'phone', 'photo', 'skills']));

        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->skills = request('skills');
        $user->about_me = request('about_me');
        
        

        $user->update();

        return redirect('/account/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/');
    }

    public function uploadPhoto (Request $request, $id) 
    {
                // dd($request->photo);

            $request->photo->store('photos');
            //  dd($request->photo);
            // dd($request->hasFile('photo'));
            return redirect('/account');
    }
}
