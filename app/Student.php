<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'univ_id',
        'username',
        'nim',
        'saldo',
        'university',
        'no_hp',
        'alamat_sekarang',
        'alamat_asal',
        'instagram_id',
        'link_linkedin',
        'foto_profile',
        'foto_ktp',
        'krs',
        'spk',
    ];

    // ELOQUENT FUNCTION
    public function user()
    {
        return $this->belongTo('App\User');
    }

    public static function isComplete($id)
    {
        $data = Student::find($id);
        if(
            $data->univ_id != null &&
            $data->username != null &&
            $data->nim != null &&
            $data->university != null &&
            $data->no_hp != null &&
            $data->alamat_sekarang != null &&
            $data->alamat_asal != null &&
            $data->link_ig != null &&
            $data->link_linkedin != null &&
            $data->foto_profile != null &&
            $data->foto_ktp != null &&
            $data->krs != null &&
            $data->spk != null
        ){
            return true;
        }else{
            return false;
        }
    }

}
