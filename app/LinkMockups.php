<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkMockups extends Model
{
    protected $fillable = [
        'name', 'slug', 'placeholder','icon','url_type','comp_url','base_url','sub_part_url','del',
    ];

       protected $table='linksmockups';
}
