<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    public function user(){
        $this->belongsTo('App\User');
    }
    public function transactions(){
        $this->morphedByMany('App\Transaction');
    }
    public function works(){
        $this->morphedByMany('App\Work');
    }
}
