<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('lista_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->float('presion');
            $table->float('gas');
            $table->float('conbustible');
            $table->float('carbono');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lista_id')->references('id')->on('lista')->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posos');
    }
};
