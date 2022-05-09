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
        Schema::create('list_etudiants', function (Blueprint $table) {
            $table->id();
            $table->String('pic')->default("/");
            $table->String('nom');
            $table->String('prenom');
            $table->date('date');
            $table->date('sexe');
            $table->date('email');
            $table->date('tel');
            $table->date('classe');
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
        Schema::dropIfExists('list_etudiants');
    }
};
