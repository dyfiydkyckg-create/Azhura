<?php

namespace App\Services\Audit;

use App\Models\AuditEvent;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Database\Eloquent\Model;

final class AuditLogger
{
    /** @param array<string, scalar|null> $properties */
    public function record(
        string $event,
        ?Workspace $workspace = null,
        ?User $actor = null,
        ?Model $subject = null,
        array $properties = [],
    ): AuditEvent {
        return AuditEvent::query()->create([
            'workspace_id' => $workspace?->getKey(),
            'actor_id' => $actor?->getKey(),
            'event' => $event,
            'subject_type' => $subject?->getMorphClass(),
            'subject_id' => $subject?->getKey(),
            'properties' => $properties,
            'occurred_at' => now(),
        ]);
    }
}
