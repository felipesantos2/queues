<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id', 255)->nullable()->constrained();
            $table->string('name')->nullable();
            $table->string('email', 70)->unique();
            $table->string('password', 255)->nullable();
            $table->enum('role', ['sys_admin', 'client_admin', 'client_user'])->default('client_user');
            $table->dateTime('last_login')->nullable();
            $table->string('code', 64)->nullable()->index();
            $table->dateTime('code_expiration', 64)->nullable();
            $table->boolean('active')->default(false);
            $table->dateTime('blocked_until')->nullable();
            $table->dateTime('deleted_at')->nullable()->default(null);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
