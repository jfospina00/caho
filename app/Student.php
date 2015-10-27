<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $guarded = ['id'];

    protected $fillable = ['name','last_name','address', 'telephone', 'mobile', 'date_born', 'email'];

}
public function padre(){
	return $this->belongsTo('App\Father');
}