<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['about','user_id','facebook','avatar','youtube'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
