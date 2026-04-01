<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use Illuminate\Http\Request;

/**
 * AbilityController
 * 
 * Handles all REST API endpoints for the ABility resource
 * Supports lisitng, creating, reading, updating, and deleting abilities
 */

class AbilityController extends Controller
{
    /**
     * Return a list abilities
     * Supports filtering by type and agent_id
     * 
     * @param Request $request
     * @return string
     */
    public function index(Request $request)
    {
        $type = $request->input('type', ' ');
        $agentId = $request->input('agent_id', null);

        $abilitiesQuery = Ability::query();

        //Filter: exact match on ability type (basic, signature, ultimate)
        if (!empty($type)) {
            $abilitiesQuery->where('type', '=', $type);
        }

        //Filter: abilities belonging to a specific agent
        if ($agentId !== null) {
            $abilitiesQuery->where('agent_id', '=', $agentId);
        }

        //Include the parent agent data
        $abilitiesQuery->with('agent');
        $abilities = $abilitiesQuery->get();

        return json_encode($abilities);
    }

    /**
     * Show a specific ability with its parent agent
     * 
     * @param Ability $ability The ability to show (route model binding)
     * @return Ability
     */
    public function show (Ability $ability)
    {
        $ability->load('agent');

        return $ability;
    }

    /**
     * Create a new ability linked to an agent.
     * 
     * @param Request $request
     * @return Ability
     */
    public function store(Request $request)
    {
        $ability = Ability::make([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'description' => $request->input('description', null),
            'key_bind' => $request->input('key_bind', null),
        ]);

        //Assoctiate the ability with its parent agent
        $ability->agent()->associate($request->input('agent_id'));
        $ability->save();

        return $ability;
    }

    /**
     * Update an existing abiltiy.
     * 
     * @param Request $request
     * @param Ability $ability the ability to update (route model binding)
     * @return Ability
     */
    public function update(Request $request, Ability $ability)
    {
        if ($request->has('name')) {
            $ability->name = $request->input('name');
        }

        if ($request->has('type')) {
            $ability->type = $request->input('type');
        }

        if ($request->has('description')) {
            $ability->description = $request->input('description');
        }

        if ($request->has('key_bind')) {
            $ability->key_bind = $request->input('key_bind');
        }

        if ($request->has('agent_id')) {
            $ability->agent()->associate($request->input('agent_id'));
        }

        $ability->save();

        return $ability;
    }

    /** 
     * Delete an ability
     * 
     * @param Ability $ability the ability to delete (route model binding)
     * @return void
     */
    public function destroy(Ability $ability)
    {
        $ability->delete();
    }
}
