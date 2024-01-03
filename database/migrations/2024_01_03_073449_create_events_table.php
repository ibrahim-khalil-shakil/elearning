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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->text('topic')->nullable();
            $table->text('goal')->nullable();
            $table->string('hosted_by')->nullable();
            $table->date('date')->nullable();
            $table->timestamps(); // Created at and Updated at columns
            $table->softDeletes(); // Deleted at column for soft deletes
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
