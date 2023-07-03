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
        Schema::create('kriteriaratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kriteriabobot_id');
            $table->foreign('kriteriabobot_id')->references('id')->on('kriteriabobot');
            $table->float('rating');
            $table->string('description', 100);
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteriaratings');
    }
};
