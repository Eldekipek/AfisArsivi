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
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('printing_technique');
            $table->string("dimensions");
            $table->string('country');
            $table->date('date');
            $table->text('explanation');
            $table->unsignedBigInteger('category_id')->comment('1->Reklam Afiş| 2-> Kültürel Afişi| 3->Sosyal Afiş');
            $table->string('image');
            $table->integer('status')->default(0)->comment('0:pasif 1:aktif');
            $table->integer('hit')->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('posters');
    }
};
