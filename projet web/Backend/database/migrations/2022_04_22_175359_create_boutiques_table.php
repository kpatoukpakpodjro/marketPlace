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
        Schema::disableForeignKeyConstraints();
        Schema::create('boutiques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('description')->nullable();
            $table->float('rating')->nullable();
            $table->unsignedInteger('marchand_id');
            $table->foreign('marchand_id')->references('id')->on('marchands')
            ->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('boutiques');
    }
};
