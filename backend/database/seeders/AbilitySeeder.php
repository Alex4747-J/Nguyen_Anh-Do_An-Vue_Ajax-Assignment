<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder for the abilities table
 * 
 * Insert real Valorant agent's ability data into the database
 * Each agent has their in-game abilities with descriptions and key bindings
 */

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Creates abilities for each agent using real Valorant game data.
     * Abilities are grouped by agent name and looked up via the agents table.
     */
    public function run(): void
    {
     $abilities = [
            'Jett' => [
                ['name' => 'Cloudburst',   'type' => 'basic',     'key_bind' => 'C', 'description' => 'Throw a cloud of fog that obscures vision on impact.'],
                ['name' => 'Updraft',      'type' => 'basic',     'key_bind' => 'Q', 'description' => 'Launch upward after a brief pause.'],
                ['name' => 'Tailwind',     'type' => 'signature', 'key_bind' => 'E', 'description' => 'Dash a short distance in the direction you are moving.'],
                ['name' => 'Blade Storm',  'type' => 'ultimate',  'key_bind' => 'X', 'description' => 'Arm yourself with deadly throwing knives that deal moderate damage and kill on headshots.'],
            ],
            'Sage' => [
                ['name' => 'Barrier Orb',      'type' => 'basic',     'key_bind' => 'C', 'description' => 'Place a solid wall that can be rotated before casting.'],
                ['name' => 'Slow Orb',          'type' => 'basic',     'key_bind' => 'Q', 'description' => 'Cast an orb that creates a slowing field on the ground.'],
                ['name' => 'Healing Orb',       'type' => 'signature', 'key_bind' => 'E', 'description' => 'Heal an ally or yourself over a few seconds.'],
                ['name' => 'Resurrection',      'type' => 'ultimate',  'key_bind' => 'X', 'description' => 'Target a dead ally to revive them with full health.'],
            ],
            'Sova' => [
                ['name' => 'Owl Drone',         'type' => 'basic',     'key_bind' => 'C', 'description' => 'Deploy a drone that can fire a dart to reveal enemies.'],
                ['name' => 'Shock Bolt',         'type' => 'basic',     'key_bind' => 'Q', 'description' => 'Fire an explosive bolt that damages enemies on impact.'],
                ['name' => 'Recon Bolt',         'type' => 'signature', 'key_bind' => 'E', 'description' => 'Fire a bolt that reveals nearby enemies in its line of sight.'],
                ['name' => 'Hunters Fury',       'type' => 'ultimate',  'key_bind' => 'X', 'description' => 'Fire up to three energy blasts that pierce walls and damage enemies.'],
            ],
            'Omen' => [
                ['name' => 'Shrouded Step', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Teleport a short distance after a brief delay.'],
                ['name' => 'Paranoia', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Send a shadow projectile that blinds anyone it touches.'],
                ['name' => 'Dark Cover', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Cast a shadow orb that creates a sphere of darkness.'],
                ['name' => 'From the Shadows', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Teleport to any location on the map.'],
            ],
            'Phoenix' => [
                ['name' => 'Blaze', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Cast a flame wall that blocks vision and damages enemies.'],
                ['name' => 'Curveball', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Cast a curved flare that blinds enemies around corners.'],
                ['name' => 'Hot Hands', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Throw a fireball that creates a damaging zone and heals Phoenix.'],
                ['name' => 'Run It Back', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Mark your current location and respawn there after dying or timer expiry.'],
            ],
            'Cypher' => [
                ['name' => 'Trapwire', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Place a stealthed tripwire that restrains and reveals enemies.'],
                ['name' => 'Cyber Cage', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Place a trap that creates a cage slowing enemies who pass through.'],
                ['name' => 'Spycam', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Place a remote camera that can fire tracking darts.'],
                ['name' => 'Neural Theft', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Use on a dead enemy to reveal the location of all living enemies.'],
            ],
            'Brimstone' => [
                ['name' => 'Stim Beacon', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Deploy a beacon that gives nearby players a fire rate boost.'],
                ['name' => 'Incendiary', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Launch a grenade that creates a damaging fire zone.'],
                ['name' => 'Sky Smoke', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Use a tactical map to deploy smoke clouds that block vision.'],
                ['name' => 'Orbital Strike', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Target an area on the map for a devastating orbital laser.'],
            ],
            'Raze' => [
                ['name' => 'Boom Bot', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Deploy a bot that chases enemies and explodes on contact.'],
                ['name' => 'Blast Pack', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Throw a satchel charge that detonates on command for damage and knockback.'],
                ['name' => 'Paint Shells', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Throw a cluster grenade that deals initial damage then splits into smaller explosions.'],
                ['name' => 'Showstopper', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Equip a rocket launcher that fires a massive area-damage rocket.'],
            ],
            'Killjoy' => [
                ['name' => 'Nanoswarm', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Throw a grenade that goes covert and activates into a damaging swarm.'],
                ['name' => 'Alarmbot', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Deploy a bot that hunts enemies and makes them vulnerable.'],
                ['name' => 'Turret', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Deploy a turret that automatically fires at enemies in range.'],
                ['name' => 'Lockdown', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Deploy a device that detains all enemies in a large radius after a windup.'],
            ],
            'Viper' => [
                ['name' => 'Snake Bite', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Fire a projectile that creates a pool of acid dealing damage.'],
                ['name' => 'Poison Cloud', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Throw a gas emitter that can be reactivated to create a toxic cloud.'],
                ['name' => 'Toxic Screen', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Deploy a long line of gas emitters that create a toxic wall.'],
                ['name' => 'Vipers Pit', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Create a massive toxic cloud covering a large area that highlights enemies.'],
            ],
            'Gekko' => [
                ['name' => 'Mosh Pit', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Throw Mosh like a grenade that duplicates across an area then explodes.'],
                ['name' => 'Wingman', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Send Wingman to seek enemies with a concussive blast or plant/defuse the spike.'],
                ['name' => 'Dizzy', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Send Dizzy soaring forward to unleash plasma blasts that blind enemies.'],
                ['name' => 'Thrash', 'type' => 'ultimate',  'key_bind' => 'X', 'description' => 'Link with Thrash and steer her to lunge at enemies, detaining them on impact.'],
            ],
            'Yoru' => [
                ['name' => 'Fakeout', 'type' => 'basic', 'key_bind' => 'C', 'description' => 'Deploy a decoy that mimics footsteps and explodes when destroyed.'],
                ['name' => 'Blindside', 'type' => 'basic', 'key_bind' => 'Q', 'description' => 'Throw a fragment that flashes after bouncing off a surface.'],
                ['name' => 'Gatecrash', 'type' => 'signature', 'key_bind' => 'E', 'description' => 'Send a rift tether forward and teleport to its location.'],
                ['name' => 'Dimensional Drift', 'type' => 'ultimate', 'key_bind' => 'X', 'description' => 'Enter a dimensional rift becoming invisible and invulnerable for a short time.'],
            ],
        ];

        // Loop through each agent's abilities and create them
        foreach ($abilities as $agentName => $agentAbilities) {
            // Find the agent by name
            $agent = Agent::where('name', $agentName)->first();

            // Create each ability linked to this agent
            foreach ($agentAbilities as $ability) {
                $ability['agent_id'] = $agent->id;
                Ability::create($ability);
            }
        }
    }
}
