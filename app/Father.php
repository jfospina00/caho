<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
     protected $table = 'fathers';

    protected $guarded = ['id'];

    protected $fillable = ['name','last_name','address', 'telephone', 'mobile', 'date_born', 'email'];

}
public function hijo(){
	return $this->hasOne('App\Student');
}