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
        Schema::create('pembantus', function (Blueprint $table) {
            $table->id();
            $table->string('id_alternative');
            $table->string('id_kriteria');
            $table->double('nilai')->default(0);
            // jenis untuk menentukan positif or negatif
            $table->string('jenis')->nullable();
            // format untuk menentukan A or D
            $table->string('format')->nullable();
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
        Schema::dropIfExists('pembantus');
    }
};
