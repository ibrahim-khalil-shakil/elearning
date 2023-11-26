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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_bn')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_bn')->nullable();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('instructor_id')->index();
            $table->enum('type', ['free', 'paid', 'subscription'])->default('paid');
            $table->decimal('price', 10, 2)->default(0.00)->nullable();
            $table->decimal('subscription_price', 10, 2)->nullable();
            $table->text('prerequisites')->nullable();
            $table->enum('difficulty', ['beginner', 'intermediate', 'advanced'])->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1)->comment('1 active, 0 inactive');
            $table->string('language')->default('en');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('course_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
