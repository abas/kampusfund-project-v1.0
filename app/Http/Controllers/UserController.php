<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * show setting user
     * 
     * return @Auth::user()->id
     */
    public function userSetting()
    {
        return view('dashboard.user-setting');
    }

    // STUDENT
    /**
     * edit the student profile
     * 
     * return @Auth::user()->id
     */
    public function studentEdit($id)
    {
        return view('dashboard.edit-profile-student');
    }

    // INVESTOR
    public function investorEdit($id)
    {
        return view('dashboard.edit-profile-investor');
    }
}
