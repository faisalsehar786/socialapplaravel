<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Linkmockups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('linksmockups', function (Blueprint $table) {
            $table->id();
            $table->text('name',500)->nullable();
            $table->text('slug',500)->nullable();
            $table->text('placeholder',500)->nullable(); 
            $table->string('icon',300)->nullable(); 
            $table->string('url_type',300)->nullable();
            $table->text('comp_url',500)->nullable(); 
            $table->text('base_url',500)->nullable(); 
            $table->text('sub_part_url',500)->nullable(); 
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
        Schema::dropIfExists('linksmockups');
    }
}
