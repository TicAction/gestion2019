<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reading')->nullable();
            $table->string('vocabulary')->nullable();
            $table->string('grammar')->nullable();
            $table->string('verb')->nullable();
            $table->string('math')->nullable();
            $table->string('english')->nullable();
            $table->string('oral')->nullable();
            $table->string('us')->nullable();
            $table->string('science')->nullable();
            $table->mediumText('other')->nullable();
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
        Schema::dropIfExists('studies');
    }
}
