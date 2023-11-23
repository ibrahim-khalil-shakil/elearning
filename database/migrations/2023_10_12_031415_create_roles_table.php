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
            $table->string('name', 20)->unique();
            $table->string('identity', 30)->unique();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            [
                'name'=> 'Super Admin',
                'identity'=> 'superadmin',
                'created_at'=> Carbon::now()
            ],
            [
                'name'=> 'Admin',
                'identity'=> 'admin',
                'created_at'=> Carbon::now()
            ],
            [
                'name'=> 'Instructor',
                'identity'=> 'instructor',
                'created_at'=> Carbon::now()
            ],
            [
                'name'=> 'Student',
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
