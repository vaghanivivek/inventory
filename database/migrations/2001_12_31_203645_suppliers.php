<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->integer('supplierid')->autoIncrement()->unique();
            $table->string('suppliername');
            $table->string('supplieremail');
            $table->string('suppliermob');
            $table->string('supplieradd');
            $table->integer('supplierbal');
            $table->timestamps();
        });
        DB::update("ALTER TABLE suppliers AUTO_INCREMENT = 251;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
