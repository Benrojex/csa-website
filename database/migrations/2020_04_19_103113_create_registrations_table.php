<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_user_id')->unsigned();
            $table->foreign('app_user_id')->references('id')->on('app_user')->onDelete('restrict');
            $table->string('system_product_name')->nullable();
            $table->string('base_board_version')->nullable();
            $table->string('system_sku')->nullable();
            $table->string('os');
            $table->string('os_version');
            $table->string('os_platform')->nullable();
            $table->string('code')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
