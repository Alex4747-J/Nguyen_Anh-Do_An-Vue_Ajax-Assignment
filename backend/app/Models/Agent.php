<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Agent Model
 *
 * Represents a Valorant agent (playable character).
 * Each agent has a role class and multiple abilities.
 *
 * @property int    $id
 * @property string $name       - Agent display name
 * @property string $role       - Duelist, Sentinel, Initiator, or Controller
 * @property string $biography  - Lore / backstory text
 * @property string $image_url  - URL to portrait image
 */

class Agent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<string>
     */

    protected $fillable = [
        'name',
        'role',
        'biography',
        'image_url',
    ];

    /**
     * Get all abilities for this agent.
     * 
     * One agent has many abilities (one-to-many relationship).
     * 
     * @return HasMany
     */

    public function abilities(): HasMany
    {
        return $this->hasMany(Ability::class);
    }
}
