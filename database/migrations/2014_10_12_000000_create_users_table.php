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
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('dob')->nullable();
            $table->text('gender')->nullable();
            $table->text('blood_group')->nullable();
            $table->text('weight')->nullable();
            $table->text('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('e_time')->nullable();
            $table->string('s_time')->nullable();
            $table->string('city')->nullable();
            $table->string('img', 255);
            $table->integer('role')->default(1); //0=admin;1=Done;2=Donor
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('date')->default(0);
            $table->string('status')->default(0);
            $table->longText('about')->nullable();
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
