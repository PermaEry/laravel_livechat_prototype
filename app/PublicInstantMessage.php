<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicInstantMessage extends Model
{
    protected $fillable = ['body', 'user_id'];

    public function user () {
    	return $this->belongsTo('App\User');
    }
}
