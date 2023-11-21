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
        Schema::create('cnis', function (Blueprint $table) {
            $table->id();
            $table->string('cni_recto');
            $table->string('cni_verso');
            $table->foreignId('hote_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            /*
            'cni_recto',
            'cni_verso',
            'hote_id',
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cnis');
    }
};
