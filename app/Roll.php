<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
    protected $table = 'rolles';

    protected $guarded = ['id'];

    protected $fillable = ['name_roll','description_roll'];

    public function state()
    {
    	return $this->belongsTo('App\State');
    }
}
