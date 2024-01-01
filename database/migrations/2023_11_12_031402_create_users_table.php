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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('email')->unique();
            $table->string('contact_en')->unique();
            $table->string('contact_bn')->unique()->nullable();
            $table->unsignedBigInteger('role_id')->index();
            $table->string('password');
            $table->string('language')->default('en');
            $table->string('image')->nullable();
            $table->boolean('full_access')->default(false)->comment('1=>yes, 0=>no');
            $table->boolean('status')->default(1)->comment('1=>active 2=>inactive');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
