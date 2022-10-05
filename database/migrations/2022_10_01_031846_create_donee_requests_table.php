<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoneeRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donee_requests', function (Blueprint $table) {
            $table->id();
            $table->string('donee_id')->nullable();
            $table->string('donor_id')->nullable();
            $table->string('name')->nullable();
            $table->string('status')->default(0); //0=no accept //1 pending //2 Reject //3 Accept
            $table->string('email')->nullable();
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('donee_requests');
    }
}
