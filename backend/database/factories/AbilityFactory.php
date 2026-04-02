<?php

namespace Database\Factories;

use App\Models\Ability;
use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ability>
 * 
 * Factory for the Ability model
 * 
 * Generates random ability data using faker
 * Each ability gets a random type and key binding
 */
class AbilityFactory extends Factory
{
    protected $model = Ability::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Valorant ability categories
        $types = ['basic', 'signature', 'ultimate'];

        //Default key bindings in Valorant
        $keyBinds = ['Q', 'E', 'C', 'X'];

        return [
            'agent_id' => Agent::factory(),
            'name' => fake()->unique()->words(2, true),
            'type' => fake()->randomElement($types),
            'description' => fake()->sentence(10),
            'key_bind' => fake()->randomElement($keyBinds),
        ];
    }
}
