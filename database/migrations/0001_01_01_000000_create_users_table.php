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
            $table->string('social_id')->nullable(); // Adding unique constraint if needed
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable(); // Nullable if not mandatory
            $table->enum('gender', ['male', 'female', 'other'])->default('other');
            $table->string('photo')->nullable();
            $table->string('social_photo')->nullable();
            $table->integer('child_number')->nullable();
            $table->date('edd_date')->nullable();
            $table->string('edd_calculation_type')->nullable();
            $table->string('email')->unique();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->integer('pregnancy_loss')->nullable();
            $table->date('pregnancy_loss_date')->nullable();
            $table->integer('baby_already_born')->nullable();
            $table->longText('bio_data')->nullable(); // Changed to longText if needed
            $table->string('login_type')->nullable();
            $table->string('user_type')->nullable();
            $table->string('subscription')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_email_confirmed')->default(false);
            $table->boolean('is_profile_complete')->default(false); // Default to false
            $table->date('lmp_date')->nullable();
            $table->integer('deleted')->nullable();
            $table->date('deleted_date')->nullable();
            $table->boolean('status')->default(true);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


        });

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
