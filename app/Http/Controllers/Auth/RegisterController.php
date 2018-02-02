<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Student,App\Investor;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['level']=='admin'){
            return redirect()->back()->with('msg','you have not permission on this case');
        }
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'level' => $data['level'],
        //     'status' => 'unverify',
        //     'password' => bcrypt($data['password']),
        // ]);
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->level = $data['level'];
        $user->status = 'unverify';
        $user->password = bcrypt($data['password']);
        $user->save();

        $info = User::where('email',$user->email)->first();
        // dd($info->id);
        if($user->level == 'student'){
            $student = new Student;
            $student->user_id = $info->id;
            $student->save();
        }else if($user->level == 'investor'){
            $investor = new Investor;
            $investor->user_id = $info->id;
            $investor->save();
        }else if($user->level == 'investor' && $user->level == 'student'){
            return redirect()->back()->with('msg','are you drunk?');
        }
        return $user;
    }
}