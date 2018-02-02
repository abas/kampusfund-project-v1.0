<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $table = 'investors';
    protected $fillable = [
        'username',
        'ktp',
        'no_hp',
        'invest_min',
        'invest_max',
        'pref_invest',
        'invest_type',
        'foto_profile',
        'foto_ktp',
        'alamat_type',
        'alamat',
    ];
    public static function isComplete($id)
    {
        $data = Investor::find($id);
        if(
            $data->username != null &&
            $data->ktp != null &&
            $data->no_hp != null &&
            $data->invest_min != null &&
            $data->invest_max != null &&
            $data->pref_invest != null &&
            $data->invest_type != null &&
            $data->foto_profile != null &&
            $data->foto_ktp != null &&
            $data->alamat_type != null &&
            $data->alamat != null
        ){
            return true;
        }else{
            return false;
        }
    }
}
