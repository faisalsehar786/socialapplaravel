<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'headerlogo', 
        'footerlogo', 
        'optional_logo',
        'backgroundcolor',
        'buttoncolor',
        'borderpanelcolor',
        'sectioncolor',
        'footrtext',
        'copyright_text',
        'social_link_show',
        'fblink',
        'mslink',
        'login_page_meta',
        'after_login_page_meta',
        'mangelinks_page_meta',
        'customize_page_meta',
        'profile_page_meta',
        'activation_page_meta'
    ];
   protected $table='settings';
}
