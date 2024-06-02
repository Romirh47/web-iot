<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //index, store, update, destroy
    // show, create, edit

    function index(){
        return view('pages.user.index');
    }

}
