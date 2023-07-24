<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * berikut merupakan atribut dari tabel jajan yang berisi.... yang memiliki fk 
     * unit_id yang akan terhubung pada pk satuan dan juga....
     */
    public function up(): void
    {

        Schema::create('jajan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jajan')->unique();
            $table->string('nama_jajan');
            $table->integer('price');
            $table->foreignId('jenis_id')->constrained();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jajan');
    }
};