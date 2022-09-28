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
            $table->integer('project_history_id');
            $table->string('kategori');
            $table->string('item');
            $table->string('jumlah');
            $table->string('waktu');
            $table->string('biaya_satuan');
            $table->string('total_biaya');
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
