<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_roll');
            $table->string('student_name');
            $table->string('library');
            $table->string('canteen');
            $table->string('hostel');
            $table->string('university_relation');
            $table->string('internet');
            $table->string('mentor_id');
            $table->string('comments_on_class_lab');
            $table->string('others');
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
        Schema::dropIfExists('feed_form');
    }
}
