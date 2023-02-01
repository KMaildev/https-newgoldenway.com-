<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_eng')->nullable();
            $table->text('title_jp')->nullable();
            $table->text('description_eng')->nullable();
            $table->text('description_jp')->nullable();
            $table->text('photo')->nullable();
            $table->text('upload_date')->nullable();
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
        Schema::dropIfExists('school_activities');
    }
}
