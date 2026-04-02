<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Ability Model
 *
 * Represents a single ability belonging to a Valorant agent.
 * Each ability has a name, description, and associated agent.
 *
 * @property int    $id
 * @property int    $agent_id   - Foreign key linking to the agent table
 * @property string $name       - Ability name
 * @property string $type       - Ability type (Basic, Signature, Ultimate)
 * @property string $description - What the ability does
 * @property string $key_bind   - Key binding for the ability (Q, E, X, C)
 */

class Ability extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<string>
     */

    protected $fillable = [
        'agent_id',
        'name',
        'type',
        'description',
        'key_bind',
    ];

    /**
     * Get the agent that owns this ability.
     * 
     * Inverse of the one-to-many relationship: each ability belongs to one agent.
     * 
     * @return BelongsTo
     */

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
