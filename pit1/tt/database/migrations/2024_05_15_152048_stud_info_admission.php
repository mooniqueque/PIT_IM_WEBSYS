<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stud_info_admission',function(Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->unsignedInteger('birth_month');
            $table->unsignedInteger('birth_day');
            $table->unsignedInteger('birth_year');
            $table->string('gender');
            $table->string('nationality');
            $table->string('contactno');
            $table->string('street_address');
            $table->string('city');
            $table->string('province');
            $table->string('zipcode');
            $table->string('emergency_name');
            $table->string('relationship');
            $table->unsignedInteger('emergency_contact_number');
            $table->string('school_last_attended');
        });
        //
    
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
