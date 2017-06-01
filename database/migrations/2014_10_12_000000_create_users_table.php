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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->nullable()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_number')->nullable()->unique();
            $table->unsignedTinyInteger('is_app_owner')->default(0);
            $table->unsignedTinyInteger('is_account_owner')->default(0);
            $table->string('password')->nullable();
            $table->unsignedBigInteger('userable_id')->nullable();
            $table->string('userable_type')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
