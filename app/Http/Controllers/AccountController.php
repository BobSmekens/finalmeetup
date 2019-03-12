<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function info () {

        // $account = \App\Account::all();

        // return $account;
        return view('account.info');
    }

    public function agenda () {

        // $account = \App\Account::all();

        // return $account;
        return view('account.agenda');
    }
}
