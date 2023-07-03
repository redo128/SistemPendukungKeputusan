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
        Schema::create('alternatifscore', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternatif_id');
            $table->foreign('alternatif_id')->references('id')->on('alternatif')->onDelete('cascade');;
            $table->unsignedBigInteger('kriteriabobot_id');
            $table->foreign('kriteriabobot_id')->references('id')->on('kriteriabobot')->onDelete('cascade');;
            $table->unsignedBigInteger('kriteriarating_id');
            $table->foreign('kriteriarating_id')->references('id')->on('kriteriaratings')->onDelete('cascade');;
            $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifscore');
    }
};
