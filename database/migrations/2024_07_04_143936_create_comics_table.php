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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title",255);
            $table->string("description",5000);
            $table->string("thumb",5000);
            $table->string("price",255);
            $table->string("series",255);
            $table->date("sale_date");
            $table->string("type",255);
            $table->string("artist",255);
            $table->string("writers",255); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
