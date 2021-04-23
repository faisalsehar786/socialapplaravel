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
            $table->text('order',500)->nullable();
            $table->text('headerlogo',500)->nullable();
            $table->text('footerlogo',500)->nullable();
            $table->text('optional_logo',500)->nullable();
            $table->text('login_page_meta',500)->nullable();
            $table->text('after_login_page_meta',500)->nullable();
            $table->text('mangelinks_page_meta',500)->nullable();
            $table->text('customize_page_meta',500)->nullable();
            $table->text('profile_page_meta',500)->nullable();
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
