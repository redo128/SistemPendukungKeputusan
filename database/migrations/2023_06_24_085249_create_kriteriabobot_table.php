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
        Schema::create('kriteriabobot', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('type', ['benefit','cost']);
            $table->float('weight',5, 2);
            $table->string('description', 100);
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteriabobot');
    }
};
