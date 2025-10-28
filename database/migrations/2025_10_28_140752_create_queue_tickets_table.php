<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('queue_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('queue_id')->nullable()->constrained();
            $table->integer('queue_ticket_number')->nullable();
            $table->dateTime('queue_ticket_created_at')->useCurrent();
            $table->string('queue_ticket_called_at')->nullable();
            $table->enum('queue_ticket_status', ['waiting', 'called', 'not_attended', 'dismissed'])->default('waiting');
            $table->string('queue_ticket_called_by', 70)->nullable();
            $table->dateTime('deleted_at')->nullable()->default(null);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('queue_tickets');
    }
};
