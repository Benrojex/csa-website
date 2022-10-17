<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('temp_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token');
            $table->string('fname');
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->double('expireTime');
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
        Schema::dropIfExists('temp_regs');
    }
}
