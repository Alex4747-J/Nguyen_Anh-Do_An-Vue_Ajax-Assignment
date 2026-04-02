<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * AgentController
 * 
 * Handles all REST API endpoints for the Agent resource.
 * Supports listing, creating, reading, updating, and deleting agents.
 */
class AgentController extends Controller
{
    /**
     * Return a list of agents
     * Supports filtering by name (partial match) and role (exact match).
     * 
     * @param Request $request
     * @return string
     */

    public function index(Request $request)
    {
        $name = $request->input('name', '');
        $role = $request->input('role', '');

        $agentsQuery = Agent::query();

        //Filter: partial text search on agent name
        if(!empty($name)) {
            $agentsQuery->where('name', 'LIKE', '%' . $name . '%');
        }

        //Filter: exact match on agent role
        if (!empty($role)) {
            $agentsQuery->where('role', '=', $role);
        }

        //Include each agent's abilities in the response
        $agentsQuery->with('abilities');
        $agents = $agentsQuery->get();

        return json_encode($agents);
    }

    /**
     * Show a specific agent with their abilities
     * 
     * @param Agent $agent The agent to show (route model binding)
     * @return Agent
     */

    public function show(Agent $agent) {
        // Load the abilities relationship
        $agent->load('abilities');

        return $agent;
    }

    /**
     * Cretae a new agent
     * 
     * @param Request $request
     * @return Agent
     */
    public function store(Request $request) {
        $agent = Agent::make([
            'name' => $request->input('name'),
            'role' => $request->input('role'),
            'biography' => $request->input('biography', null),
            'image_url' => $request->input('image_url', null),
        ]);

        $agent->save();

        return $agent;
    }

    /**
     * Update an existing agent
     * 
     * @param Request $request
     * @param Agent $agent the agent to update. (route model binding)
     * @return Agent
     */

    public function update(Request $request, Agent $agent) {
        //Only update fields that are present in the request
        if ($request->has('name')) {
            $agent->name = $request->input('name');            
        }

        if ($request->has('role')) {
            $agent->role = $request->input('role');
        }

        if ($request->has('biography')) {
            $agent->biography = $request->input('biography');
        }

        if ($request->has('image_url')) {
            $agent->image_url = $request->input('image_url');
        }

        $agent->save();

        return $agent;
    }

    /**
     * Delete an agent
     * Related abilities are also deleted due to cascade.
     * 
     * @param Agent $agent The agent to delete (route model binding)
     * @return void
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
    }
}
