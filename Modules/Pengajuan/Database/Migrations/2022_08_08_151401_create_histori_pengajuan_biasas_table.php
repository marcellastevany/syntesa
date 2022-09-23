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
        Schema::create('histori_pengajuan_biasas', function (Blueprint $table) {
            $table->id();
            $table->string('pengajuan_biasa_id');
            $table->string('user_id');
            $table->string('jabatan');
            $table->text('catatan');
            $table->text('status'); 
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
        Schema::dropIfExists('histori_pengajuan_biasas');
    }
};
