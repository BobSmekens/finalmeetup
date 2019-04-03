<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        
        return redirect('/account/' . Auth::user()->id)->with('success', 'You are successfully logged in');
        // return view('account.index', [
        //     'users' => $users
        // ]);
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
        if (Auth::user()->id==$id) {
            $user = User::findOrFail($id);

            return view('account.edit', [
                'user' => $user
            ]);
        } else {
            return redirect('/');
        }
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
        if (Auth::user()->id==$id) {
            if($request->hasFile('photo')){
                //  dd($request->photo);
                // $request->photo->storeAs('public/profilepics', 'profilepic' . $id .'.jpg');
                Storage::put('public', $request->file('photo'));
                // dd($request->file('photo')->hashName());
                // Storage::setVisibility($request->file('photo'), 'public');
            }

            $user = User::findOrFail($id);
            if($request->hasFile('photo')){
                // dd($request->file('photo')->hashName());
                $user->photo = $request->file('photo')->hashName();
                $user->update();
            }
            $user->update(request(['name', 'email', 'phone', 'skills', 'about_me']));
            
            //return redirect('/account/' . $id);
            return redirect('/account/' . $id)->with('success', 'Account info updated');

            // $user->name = request('name');
            // $user->email = request('email');
            // $user->phone = request('phone');
            // $user->skills = request('skills');
            // $user->about_me = request('about_me');
            
            // $user->update();

        } else {
            return redirect('/');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id==$id) {
        $user = User::findOrFail($id);

        $user->delete();
        }
        return redirect('/signup')->with('success', 'Account deleted');
    }

    public function registered()
    {
        return redirect('/account/' . Auth::user()->id)->with('success', 'Thank you for registering');
        // return view('account.index', [
        //     'users' => $users
        // ]);
    }

}
