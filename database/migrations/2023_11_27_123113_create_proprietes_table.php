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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->longText('description')->nullable();
            $table->decimal('prix');
            $table->string('slug_prop');
            $table->timestamps();
            $table->foreignId('categorie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('disponibilite_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('hote_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};
