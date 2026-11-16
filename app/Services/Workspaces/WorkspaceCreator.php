<?php

namespace App\Services\Workspaces;

use App\Models\User;
use App\Models\Workspace;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

final class WorkspaceCreator
{
    public function create(User $owner, string $name, ?string $description = null): Workspace
    {
        return DB::transaction(function () use ($owner, $name, $description): Workspace {
            $baseSlug = Str::slug($name) ?: 'workspace';
            $slug = $baseSlug;
            $suffix = 2;

            while (Workspace::query()->where('slug', $slug)->exists()) {
                $slug = $baseSlug.'-'.$suffix++;
            }

            $workspace = Workspace::query()->create([
                'name' => $name,
                'slug' => $slug,
                'description' => $description,
                'created_by' => $owner->getKey(),
            ]);

            $workspace->members()->attach($owner, ['role' => 'owner']);

            return $workspace;
        });
    }
}
