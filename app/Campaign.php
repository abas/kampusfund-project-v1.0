<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = [
        'cover',
        'judul',
        'diskripsi',
        'link_youtube',
        'kebutuhan_dana',
        'pengembalian_dana',
        'bagi_hasil',
        't_judul',
        't_deskripsi',
        'category_campaign_id',
        'user_id',
    ];

    protected $hidden = [
        'bagi_hasil'
    ];

    protected $guard = [
        'bagi_hasil'
    ];

    // STATIC FUNTION 
    public static function isMine($user_id,$campaign_user_id)
    {
        if($user_id==$campaign_user_id){
            return true;
        }return false;
    }    
}
