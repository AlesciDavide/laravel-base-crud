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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80);
            $table->string('specie', 50);
            $table->string('razza', 50)->nullable();
            $table->integer('eta')->nullable();
            $table->string('sesso', 20);
            $table->string('colore', 50)->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->decimal('altezza', 8, 2)->nullable();
            $table->string('url_img')->nullable();
            $table->text('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
