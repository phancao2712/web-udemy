<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->float('total', 10)->default(0);
            $table->integer('student_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('set null');
            $table->foreign('status_id')->references('id')->on('orders_status')->onDelete('set null');
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
        Schema::dropIfExists('orders');
    }
};
