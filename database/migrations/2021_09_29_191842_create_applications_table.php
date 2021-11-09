<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('middle_name');
            $table->string('date_of_birth');
            $table->string('email');
            $table->string('street');
            $table->string('parish');
            $table->string('tel');
            $table->string('trn');
            $table->string('qualification1');
            $table->string('qualification2');
            $table->string('qualification3');
            $table->string('qualification4');
            $table->string('qualification5');
            $table->string('gender');
            $table->foreignId('student_id')->constrained('students', 'id');;
            $table->foreignId('course_id')->constrained('courses', 'id');;
            $table->string('status');
            $table->string('cvv');
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
        Schema::dropIfExists('applications');
    }
}
