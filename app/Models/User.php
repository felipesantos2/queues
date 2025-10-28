<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'company_id',
        'email',
        'password',
        'role',
        'last_login',
        'code',
        'code_expiration',
        'active',
        'blocked_until',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
