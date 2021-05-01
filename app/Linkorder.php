<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkorder extends Model
{
    
protected $fillable = [
        'user_id', 'order', 'bgimg','bgcolor','temp',
    ];
    

     protected $table='linksorder';
}
