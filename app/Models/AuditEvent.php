<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditEvent extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'workspace_id', 'actor_id', 'event', 'subject_type', 'subject_id', 'properties', 'occurred_at',
    ];

    protected function casts(): array
    {
        return ['properties' => 'array', 'occurred_at' => 'immutable_datetime'];
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(Workspace::class);
    }

    public function actor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'actor_id');
    }
}
