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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_adm_bca')->unique();
            $table->string('BCA')->nullable();
            $table->string('Nama_adm_bri')->unique();
            $table->string('BRI')->nullable();
            $table->string('Nama_adm_MANDIRI')->unique();
            $table->string('MANDIRI')->nullable();
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
        Schema::dropIfExists('admin');
    }
};
