<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            // Autoincrement+INT+primary key (Laravel requires)
            $table->increments('id');
            $table->string('name', 100); // VARCHAR 100
            $table->string('email'); // VARCHAR 255
            $table->string('password', 60); // VARCHAR 60
            $table->text('about')->nullable(); // TEXT 64K + null            
            // Integer + unsigned 4Bytes
            $table->integer('favorite')->unsigned();
            $table->rememberToken('rememberToken');
            $table->integer('isAdmin');
            $table->timestamps(); // timestamps (Laravel requires)
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
