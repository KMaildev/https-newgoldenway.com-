<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanditatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canditates', function (Blueprint $table) {
            $table->text('name')->nullable();
            $table->text('name_japan')->nullable();
            $table->text('avatar_path')->nullable();
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('gender')->nullable();
            $table->text('sight')->nullable();
            $table->text('health_condition')->nullable();
            $table->text('education')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('birthday')->nullable();
            $table->text('address')->nullable();
            $table->text('province')->nullable();
            $table->text('district')->nullable();
            $table->text('ward')->nullable();
            $table->text('wine')->nullable();
            $table->text('tattoo')->nullable();
            $table->text('japanese_level')->nullable();
            $table->text('worker_specialized')->nullable();
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
        Schema::dropIfExists('canditates');
    }
}
