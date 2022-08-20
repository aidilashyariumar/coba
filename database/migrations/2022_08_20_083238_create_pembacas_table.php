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
        Schema::create('pembacas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_useraccess');
            $table->string('name',50);
            $table->string('email',50);
            $table->string('foto',255);
            $table->string('telepon',15);
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
        Schema::dropIfExists('pembacas');
    }
};
