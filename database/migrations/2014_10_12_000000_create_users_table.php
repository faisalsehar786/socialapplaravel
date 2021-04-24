<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from(2);
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('parent_id')->default(0);
            $table->string('username')->nullable();
            $table->string('usernanme_by_user')->nullable();
            $table->string('image',300)->nullable();
            $table->string('about',500)->nullable(); 
            $table->string('phone')->nullable();
            $table->enum('activation', ['on','off'])->default('off');
            $table->integer('role_id')->default(0);
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
        Schema::dropIfExists('users');
    }
}
