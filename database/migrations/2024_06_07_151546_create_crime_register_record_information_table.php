<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('crime_register_record_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();

            $table->foreign('name')->references('name')->on('people')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('crime_register_record_information');
    }
};
