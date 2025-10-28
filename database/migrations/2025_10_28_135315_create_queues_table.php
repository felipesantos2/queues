<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained();
            $table->string('name', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('service_name', 50)->nullable();
            $table->string('service_desk', 30)->nullable();
            $table->string('queue_prefix', 10)->nullable();
            $table->integer('queue_total_digits')->default(3);
            $table->json('queue_colors', 255)->nullable();
            $table->string('hash_code', 64)->unique();
            $table->enum('status', ['active', 'inactive', 'done'])->default('inactive');
            $table->dateTime('deleted_at')->nullable()->default(null);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('queues');
    }
};
