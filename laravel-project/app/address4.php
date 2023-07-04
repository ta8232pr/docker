<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address4 extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
