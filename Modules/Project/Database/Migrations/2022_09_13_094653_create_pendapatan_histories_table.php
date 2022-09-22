<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('project_history_id')->nullable();
            $table->string('kategori');
            $table->string('item')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('waktu')->nullable();
            $table->string('pendapatan_satuan')->nullable();
            $table->string('total_pendapatan')->nullable();
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
        Schema::dropIfExists('pendapatan_histories');
    }
};
