<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20)->unique();
            $table->string('identity', 30)->unique();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            [
                'type'=> 'Super Admin',
                'identity'=> 'superadmin',
                'created_at'=> Carbon::now()
            ],
            [
                'type'=> 'Admin',
                'identity'=> 'admin',
                'created_at'=> Carbon::now()
            ],
            [
                'type'=> 'Instructor',
                'identity'=> 'instructor',
                'created_at'=> Carbon::now()
            ],
            [
                'type'=> 'Student',
                'identity'=> 'student',
                'created_at'=> Carbon::now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
