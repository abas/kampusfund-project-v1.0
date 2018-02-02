<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User,App\Investor,App\Student;

class DashboardController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->middleware('auth');
        $this->f_user = new User;
    }

    public function dashboard()
    {
        $user = Auth::user();
        if($this->f_user::isStudent($user->level)){
            $data = Student::where('user_id','=',$user->id)->get()->first();
        }else if($this->f_user::isInvestor($user->level)){
            $data = Investor::where('user_id','=',$user->id)->get()->first();
        }

        $info = [$user,$data];
        $isverif = false;
        if($user->isVerify($user->id)){
            $isverif = true;
        }
        return view('dashboard.dashboard',compact('user','data','isverif'));
        // return $data;
        // return $user;
        return $info;
    }

    public function dashboardBlog()
    {
        return view('dashboard.dashboard-blog');
    }


    public function notificaton()
    {
        return view('dashboard.notification');
    }

}
