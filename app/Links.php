<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Links extends Model
{ 
    protected $fillable = [
        'user_id', 'link_mock_id', 'name','image','url',
    ];
 

    public function linksmockup()
{
    return $this->belongsTo('App\LinkMockups', 'link_mock_id', 'id');
}
       protected $table='links';
}


 