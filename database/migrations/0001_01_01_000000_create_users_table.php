<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Enums\Gender;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->index();
            $table->string('secondName')->index();
            $table->string('slug')->unique();
            $table->enum('gender',[
                Gender::Male->value, 
                Gender::Female->value, 
                ]);
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();           
            $table->rememberToken()->nullable();
            $table->string('mobile')->nullable();
            $table->string('position')->default('user');
            $table->boolean('active')->default(1);
            // $table->nullableMorphs('userable');
            $table->timestamps();
        });

        //to combine 2 fields into one field for searching and sorting in datatable
        // DB::statement("ALTER TABLE users ADD FULLNAME AS CONCAT(firstName,' ',secondName)");

        // DB::statement("UPDATE users SET slug = CONCAT(LOWER(TRIM(firstName)), '-', LOWER(TRIM(secondName)))");

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
