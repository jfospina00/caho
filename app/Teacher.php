<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $guarded = ['id'];

    protected $fillable = ['name','last_name','address', 'telephone', 'mobile', 'date_born', 'email'];

    public function user()
    {
        return $this->hasOne('App\user');
    }

    public function asignature()
    {
    	return $this->belongsTo('App\Asignature');
    }
}
