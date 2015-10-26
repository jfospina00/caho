<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $guarded = ['id'];

    protected $fillable = ['name_state','description_state'];

}
