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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('no_project')->nullable();
            $table->string('pemegang_project')->nullable();
            $table->string('tgl_project')->nullable();
            $table->string('nama_project')->nullable();
            $table->string('sales_order')->nullable();
            $table->string('keterangan')->nullable();
            $table->text('deskripsi')->nullable();
            // $table->string('lampiran_id')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
