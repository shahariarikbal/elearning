<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('trainer_id');
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('type');
            $table->string('real_price');
            $table->string('discount_price')->nullable();
            $table->string('lesson');
            $table->string('video_url');
            $table->string('duration');
            $table->boolean('status')->default(true);
            $table->string('image');
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
        Schema::dropIfExists('courses');
    }
};
