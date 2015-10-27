<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignature extends Model
{
    protected $table = 'asignatures';

    protected $guarded = ['id'];

    protected $fillable = ['name_asignature'];

    public function teacher()
    {
    	return $this->hasOne('App\Teacher');
    }
}
