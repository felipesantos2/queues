<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class QueueTicket extends Model
{
    /** @use HasFactory<\Database\Factories\QueueTicketFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'queue_id',
        'queue_ticket_number',
        'queue_ticket_created_at',
        'queue_ticket_called_at',
        'queue_ticket_status',
        'queue_ticket_called_by',
    ];

    public function queue(): BelongsTo
    {
        return $this->belongsTo(Queue::class);
    }
}
