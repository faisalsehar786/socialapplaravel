<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('headerlogo',500)->nullable();
            $table->text('footerlogo',500)->nullable();
            $table->text('optional_logo',500)->nullable();
            $table->text('backgroundcolor',500)->nullable();
            $table->text('buttoncolor',500)->nullable();
            $table->text('borderpanelcolor',500)->nullable();
            $table->text('sectioncolor',500)->nullable();
            $table->text('footrtext',500)->nullable();
            $table->text('copyright_text',500)->nullable();
            $table->enum('social_link_show', ['on','off'])->default('on');
            $table->text('fblink',500)->nullable();
            $table->text('mslink',500)->nullable();
            $table->text('login_page_meta',500)->nullable();
            $table->text('after_login_page_meta',500)->nullable();
            $table->text('mangelinks_page_meta',500)->nullable();
            $table->text('customize_page_meta',500)->nullable();
            $table->text('profile_page_meta',500)->nullable();
            $table->text('activation_page_meta',500)->nullable();
            $table->rememberToken();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('settings');
    }
}
