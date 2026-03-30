<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Agent>
 * 
* Factory for the Agent model
* Generates random agent data using Faker
* Roles are randomly picked from the four Valorant classes.
 */
class AgentFactory extends Factory
{
    /**
    * Define the model's default state.

     * @return array<string, mixed>
     */
    public function definition(): array
    {
            //The four Valorant agent roles
            $roles = ['Duelist', 'Sentinel', 'Initiator', 'Controller'];

            return [
                'name' => fake()->unique()->firstName(),
                'role' => fake()->randomElement($roles),
                'biography' => fake()->paragraph(3),
                'image_url' => fake()->imageUrl(640, 400, 'people'),
        ];
    }
}
