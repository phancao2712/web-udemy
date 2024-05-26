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
        // Schema::create('lessons', function(Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('slug');
        //     $table->integer('video_id')->unsigned()->nullable();
        //     $table->integer('document_id')->unsigned()->nullable();
        //     $table->integer('parent_id')->unsigned()->nullable();
        //     $table->boolean('is_trial')->default(0);
        //     $table->integer('view')->default(0);
        //     $table->integer('position')->default(0);
        //     $table->float('duration');
        //     $table->text('description')->nullable();
        //     $table->timestamps();
        // });

        // Schema::table('lessons', function (Blueprint $table) {
        //     $table->foreign('video_id')->references('id')->on('video')->nullOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('lessons');
    }
};
