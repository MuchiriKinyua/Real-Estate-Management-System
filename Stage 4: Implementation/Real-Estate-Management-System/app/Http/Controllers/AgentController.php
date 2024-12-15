<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AgentRepository;
use Illuminate\Http\Request;
use Flash;

class AgentController extends AppBaseController
{
    /** @var AgentRepository $agentRepository*/
    private $agentRepository;

    public function __construct(AgentRepository $agentRepo)
    {
        $this->agentRepository = $agentRepo;
    }

    /**
     * Display a listing of the Agent.
     */
    public function index(Request $request)
    {
        $agents = $this->agentRepository->paginate(10);

        return view('agents.index')
            ->with('agents', $agents);
    }

    /**
     * Show the form for creating a new Agent.
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created Agent in storage.
     */
    public function store(CreateAgentRequest $request)
    {
        $input = $request->all();

        $agent = $this->agentRepository->create($input);

        Flash::success('Agent saved successfully.');

        return redirect(route('agents.index'));
    }

    /**
     * Display the specified Agent.
     */
    public function show($id)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        return view('agents.show')->with('agent', $agent);
    }

    /**
     * Show the form for editing the specified Agent.
     */
    public function edit($id)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        return view('agents.edit')->with('agent', $agent);
    }

    /**
     * Update the specified Agent in storage.
     */
    public function update($id, UpdateAgentRequest $request)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        $agent = $this->agentRepository->update($request->all(), $id);

        Flash::success('Agent updated successfully.');

        return redirect(route('agents.index'));
    }

    /**
     * Remove the specified Agent from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            Flash::error('Agent not found');

            return redirect(route('agents.index'));
        }

        $this->agentRepository->delete($id);

        Flash::success('Agent deleted successfully.');

        return redirect(route('agents.index'));
    }
}
