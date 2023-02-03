<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreInfoV1ToCanditatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('canditates', function (Blueprint $table) {
            $table->text('collective_living_experience')->nullable();
            $table->text('drink_alcohol')->nullable();
            $table->text('test_iq')->nullable();
            $table->text('math_test')->nullable();
            $table->text('desired_monthly_salary')->nullable();
            $table->text('want_to_do_more')->nullable();
            $table->text('want_to_work_in_japan')->nullable();
            $table->text('introduce_yourself')->nullable();
            $table->text('interview_questions')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('canditates', function (Blueprint $table) {
            //
        });
    }
}
