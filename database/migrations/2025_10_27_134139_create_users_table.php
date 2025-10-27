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
            $table->string('name')->nullable();
            $table->string('email', 70)->unique();
            $table->string('password', 255)->nullable()->default(null);
            $table->integer('id_company', 255)->default(0);
            $table->emum('role', ['sys-admin', 'client-admin', 'client-user'])->default('client-user');
            $table->dateTime('last_login')->nullable()->default(null);
            $table->string('code', 64)->nullable()->default(null);
            $table->dateTime('code_expiration', 64)->nullable()->default(null);
            $table->bool('active')->default(false);
            $table->dateTime('blocked_until')->nullable()->default(null);
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
