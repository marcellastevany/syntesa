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
        Schema::create('biayas', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('kategori');
            $table->string('item');
            $table->string('jumlah');
            $table->string('waktu');
            $table->string('biaya_satuan');
            $table->string('total_biaya');
            $table->timestamps();
        });

        //  Schema::table('biayas', function (Blueprint $table) {
        //         $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        //         $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
        //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biayas');
    }
};
