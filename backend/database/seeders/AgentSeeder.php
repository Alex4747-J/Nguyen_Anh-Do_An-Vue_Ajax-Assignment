<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder for the agents table
 * 
 * Inserts real Valorant agent data into the database
 * Each agent has a name, role, and short biography
 */
class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Creates 10 Valorant agents with their actual roles
     */

    public function run(): void
    {
        $agents = [
            [
                'name' => 'Jett',
                'role' => 'Duelist',
                'biography' => 'A South Korean wind assassin who excels at fast-paced aggressive plays.',
                'image_url' => 'https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/displayicon.png',
            ],
            [
                'name' => 'Sage',
                'role' => 'Sentinel',
                'biography' => 'A Chinese healer and barrier specialist who supports her team with restorative powers.',
                'image_url' => 'https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/displayicon.png',
            ],
            [
                'name'  => 'Sova',
                'role' => 'Initiator',
                'biography' => 'A Russian hunter who tracks and finds enemies with his reconnaissance bolts.',
                'image_url' => 'https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/displayicon.png',
            ],
            [
                'name' => 'Omen',
                'role' => 'Controller',
                'biography' => 'A shadowy phantom who blinds enemies and teleports across the battlefield.',
                'image_url' => 'https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/displayicon.png',
            ],
            [
                'name' => 'Phoenix',
                'role' => 'Duelist',
                'biography' => 'A British fire agent who heals himself with his own flames and fights on his own terms.',
                'image_url' => 'https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/displayicon.png',
            ],
            [
                'name' => 'Cypher',
                'role' => 'Sentinel',
                'biography' => 'A Moroccan surveillance expert who uses traps and cameras to lock down areas.',
                'image_url' => 'https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/displayicon.png',
            ],
            [
                'name' => 'Brimstone',
                'role' => 'Controller',
                'biography' => 'An American commander who calls in orbital strikes and smoke screens from the sky.',
                'image_url' => 'https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/displayicon.png',
            ],
            [
                'name' => 'Raze',
                'role' => 'Duelist',
                'biography' => 'A Brazilian demolitions expert who uses explosive gadgets to clear out enemies.',
                'image_url' => 'https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/displayicon.png',
            ],
            [
                'name' => 'Killjoy',
                'role' => 'Sentinel',
                'biography' => 'A German genius inventor who deploys turrets and bots to secure areas.',
                'image_url' => 'https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/displayicon.png',
            ],
            [
                'name' => 'Viper',
                'role' => 'Controller',
                'biography' => 'An American chemist who deploys toxic gas and acid to control the battlefield.',
                'image_url' => 'https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/displayicon.png',
            ],
            [
                'name' => 'Gekko',
                'role' => 'Initiator',
                'biography' => 'An Angeleno who leads a tight-knit crew of calamitous creatures that scatter enemies.',
                'image_url' => 'https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/displayicon.png',
            ],
            [
                'name' => 'Yoru',
                'role' => 'Duelist',
                'biography' => 'A Japanese dimensional rift walker who uses deception and teleportation to outflank enemies.',
                'image_url' => 'https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/displayicon.png',
            ],
        ];

        //Loop through each agent and create it in the database
        foreach ($agents as $agent) {
            Agent::create($agent);
        }
    }
}
