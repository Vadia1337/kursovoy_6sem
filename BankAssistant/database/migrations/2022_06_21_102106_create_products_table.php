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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner');
            $table->string('sum');
            $table->string('categ')->nullable();
            $table->string('stavka')->nullable();
            $table->string('pribil')->nullable();
            $table->string('startdate')->nullable();
            $table->string('enddate')->nullable();
            $table->string('platezh')->nullable();
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
        Schema::dropIfExists('products');
    }
};
