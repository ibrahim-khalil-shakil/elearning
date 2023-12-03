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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('contact_en')->unique();
            $table->string('contact_bn')->unique()->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('role_id')->index();
            $table->text('bio')->nullable();
            $table->string('title')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1)->comment('1 active, 0 inactive');
            $table->string('password');
            $table->string('language')->default('en');
            $table->text('access_block')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
