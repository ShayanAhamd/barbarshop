<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('businessname');
            $table->timestamp('dob', $precision = 0);
            $table->string('contact_no1');
            $table->string('contact_no2');
            $table->string('email');
            $table->string('address');
            $table->string('town');
            $table->enum('type', ['basic', 'member']);
            $table->string('notes');
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
        Schema::dropIfExists('customers');
    }
};
