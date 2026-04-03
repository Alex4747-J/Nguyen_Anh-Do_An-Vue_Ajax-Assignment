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
                'biography' => "Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can. She runs circles around every skirmish, cutting enemies before they even know what hit them.",
                'icon_url' => 'https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/displayicon.png',
                'image_url' => 'images/Jett_artwork.webp',
            ],
            [
                'name' => 'Sage',
                'role' => 'Sentinel',
                'biography' => 'The bastion of China, Sage creates safety for herself and her team wherever she goes. Able to revive fallen friends and stave off aggressive pushes, she provides a calm center to a hellish fight.',
                'icon_url' => 'https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/displayicon.png',
                'image_url' => 'images/Sage_artwork.webp',
            ],
            [
                'name'  => 'Sova',
                'role' => 'Initiator',
                'biography' => "Born from the eternal winter of Russia's tundra, Sova tracks, finds, and eliminates enemies with ruthless efficiency and precision. His custom bow and incredible scouting abilities ensure that even if you run, you cannot hide.",
                'icon_url' => 'https://media.valorant-api.com/agents/320b2a48-4d9b-a075-30f1-1f93a9b638fa/displayicon.png',
                'image_url' => 'images/Sova_artwork.webp',
            ],
            [
                'name' => 'Omen',
                'role' => 'Controller',
                'biography' => 'A phantom of a memory, Omen hunts in the shadows. He renders enemies blind, teleports across the field, then lets paranoia take hold as his foe scrambles to learn where he might strike next.',
                'icon_url' => 'https://media.valorant-api.com/agents/8e253930-4c05-31dd-1b6c-968525494517/displayicon.png',
                'image_url' => 'images/Omen_artwork.webp',
            ],
            [
                'name' => 'Phoenix',
                'role' => 'Duelist',
                'biography' => "Hailing from the U.K., Phoenix's star power shines through in his fighting style, igniting the battlefield with flash and flare. Whether he's got backup or not, he'll rush into a fight on his own terms.",
                'icon_url' => 'https://media.valorant-api.com/agents/eb93336a-449b-9c1b-0a54-a891f7921d69/displayicon.png',
                'image_url' => 'images/Phoenix_artwork.webp',
            ],
            [
                'name' => 'Cypher',
                'role' => 'Sentinel',
                'biography' => "The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move. No secret is safe. No maneuver goes unseen. Cypher is always watching.",
                'icon_url' => 'https://media.valorant-api.com/agents/117ed9e3-49f3-6512-3ccf-0cada7e3823b/displayicon.png',
                'image_url' => 'images/Cypher_artwork.webp',
            ],
            [
                'name' => 'Brimstone',
                'role' => 'Controller',
                'biography' => "Joining from the U.S.A., Brimstone's orbital arsenal ensures his squad always has the advantage. His ability to deliver utility precisely and from a distance make him an unmatched boots-on-the-ground commander.",
                'icon_url' => 'https://media.valorant-api.com/agents/9f0d8ba9-4140-b941-57d3-a7ad57c6b417/displayicon.png',
                'image_url' => 'images/Brimstone_artwork.webp',
            ],
            [
                'name' => 'Raze',
                'role' => 'Duelist',
                'biography' => 'Raze explodes out of Brazil with her big personality and big guns. With her blunt-force-trauma playstyle, she excels at flushing entrenched enemies and clearing tight spaces with a generous dose of “boom.”',
                'icon_url' => 'https://media.valorant-api.com/agents/f94c3b30-42be-e959-889c-5aa313dba261/displayicon.png',
                'image_url' => 'images/Raze_artwork.webp',
            ],
            [
                'name' => 'Killjoy',
                'role' => 'Sentinel',
                'biography' => "The genius of Germany, Killjoy effortlessly secures key battlefield positions with her arsenal of inventions. If their damage doesn't take her enemies out, the debuff her robots provide will make short work of them.",
                'icon_url' => 'https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/displayicon.png',
                'image_url' => 'images/Killjoy_artwork.webp',
            ],
            [
                'name' => 'Viper',
                'role' => 'Controller',
                'biography' => "The American chemist, Viper deploys an array of poisonous chemical devices to control the battlefield and choke the enemy's vision. If the toxins don't kill her prey, her mind games surely will.",
                'icon_url' => 'https://media.valorant-api.com/agents/707eab51-4836-f488-046a-cda6bf494859/displayicon.png',
                'image_url' => 'images/Viper_artwork.webp',
            ],
            [
                'name' => 'Gekko',
                'role' => 'Initiator',
                'biography' => 'Gekko the Angeleno leads a tight-knit crew of calamitous creatures. His buddies bound forward, scattering enemies out of the way, with Gekko chasing them down to regroup and go again.',
                'icon_url' => 'https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/displayicon.png',
                'image_url' => 'images/Gekko_artwork.webp',
            ],
            [
                'name' => 'Yoru',
                'role' => 'Duelist',
                'biography' => 'Japanese native Yoru rips holes straight through reality to infiltrate enemy lines unseen. Using deception and aggression in equal measure, he gets the drop on each target before they know where to look.',
                'icon_url' => 'https://media.valorant-api.com/agents/7f94d92c-4234-0a36-9646-3a87eb8b5c89/displayicon.png',
                'image_url' => 'images/Yoru_artwork.webp',
            ],
        ];

        Agent::factory()->createMany($agents);

    }
}
