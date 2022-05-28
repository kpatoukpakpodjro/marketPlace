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
        Schema::create('contrats', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateD') ;
            $table->date('dateF') ;

            $table->unsignedInteger('admin_id') ;
            $table->foreign('admin_id')->references('id')->on('admins')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('boutique_id') ;
            $table->foreign('boutique_id')->references('id')->on('boutiques')
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
        Schema::dropIfExists('contrats');
    }
};
