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
        Schema::create('kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->nullable();
            $table->string('id_alternative')->nullable();
            $table->string('nama_kriteria');
            $table->string('bobot')->nullable();
            $table->string('attribute');
            $table->double('bobot_normalisasi')->default(0);
            $table->double('a_plus')->default(0);
            $table->double('a_min')->default(0);

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
        Schema::dropIfExists('kriterias');
    }
};
