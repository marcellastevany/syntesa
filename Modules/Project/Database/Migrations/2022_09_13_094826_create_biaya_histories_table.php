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
        Schema::create('biaya_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('project_history_id')->nullable();
            $table->string('kategori')->nullable();
            $table->string('item')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('waktu')->nullable();
            $table->string('biaya_satuan')->nullable();
            $table->string('total_biaya')->nullable();
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
        Schema::dropIfExists('biaya_histories');
    }
};
