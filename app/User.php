<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Investor,App\Student;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // ELOQUENT FUNCTION
    /**
     * cip gwe no eloquent e cip, aku rodo ra paham
     */

    
    // STATIC FUNCTION
    public static function isVerify($id)
    {
        $user = User::find($id);
        $user_type = $user->level;
        if($user_type == 'student'){
            $student = new Student;
            $data = Student::where('user_id','=',$id)->get()->first();
            // return $data->id;
            if($data!=null){
                if($student->isComplete($data->id)){
                    return true;
                }else{
                    return false;
                }
            }
        }else if($user_type == 'investor'){
            $investor = new Investor;
            $data = Investor::where('user_id','=',$id)->get()->first();
            if($investor->isComplete($data->id)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function isStudent($level)
    {
        if($level == 'student'){
            return true;
        }return false;
    }

    public static function isInvestor($level)
    {
        if($level == 'investor'){
            return true;
        }return false;
    }

}
