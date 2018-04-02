<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    
    protected $fillable = [
        'user_id','firstname', 'lastname','url_img','email'
    ];


  /*INI relaciones entre modelos*/
	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function rols()
    {
        return $this->hasMany('App\Models\sys\Rol','user_id','user_id');
    }
    /*FIN relaciones entre modelos*/

    public function getFullNameAttribute()
    {
      return $this->firstname .' ' . $this->lastname;
    }
    public function getCountAttribute()
    {
      // return $this->firstname .' ' .$this->lastname;
      return $this->count();
    }
}
