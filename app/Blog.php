<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guard = ['user_id'];
    protected $fillable = [
        'judul','cover_file','deskripsi',
        'category_id','user_id'
    ];

    // protected $hidden = ['user_id'];
    
    
}
