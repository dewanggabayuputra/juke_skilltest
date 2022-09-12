<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('applied_position');
            $table->string('name');
            $table->integer('ktp');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->char('gender', 1);
            $table->string('religion');
            $table->char('blood_type', 2);
            $table->string('marital_status');
            $table->string('ktp_address');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
            $table->string('nearest_people');
            $table->string('skills');
            $table->boolean('is_willing_travel');
            $table->integer('expected_salary');
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
        Schema::dropIfExists('biodata');
    }
}
