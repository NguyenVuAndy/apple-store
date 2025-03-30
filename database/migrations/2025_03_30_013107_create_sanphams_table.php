<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('masp');
            $table->string('tensp')->unique();
            $table->string('slug')->unique();
            $table->string('chitietsp')->nullable();
            $table->integer('giasp');
            $table->text('mieutasp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanphams');
    }
};
