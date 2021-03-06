<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTangkapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tangkapan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('pemilik');
            $table->date('tanggal');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('ikan');
            $table->integer('hasil_tangkapan');
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
        Schema::dropIfExists('tangkapan');
    }
}
