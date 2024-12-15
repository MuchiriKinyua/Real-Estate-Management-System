<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeaseRequest;
use App\Http\Requests\UpdateLeaseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\LeaseRepository;
use Illuminate\Http\Request;
use Flash;

class LeaseController extends AppBaseController
{
    /** @var LeaseRepository $leaseRepository*/
    private $leaseRepository;

    public function __construct(LeaseRepository $leaseRepo)
    {
        $this->leaseRepository = $leaseRepo;
    }

    /**
     * Display a listing of the Lease.
     */
    public function index(Request $request)
    {
        $leases = $this->leaseRepository->paginate(10);

        return view('leases.index')
            ->with('leases', $leases);
    }

    /**
     * Show the form for creating a new Lease.
     */
    public function create()
    {
        return view('leases.create');
    }

    /**
     * Store a newly created Lease in storage.
     */
    public function store(CreateLeaseRequest $request)
    {
        $input = $request->all();

        $lease = $this->leaseRepository->create($input);

        Flash::success('Lease saved successfully.');

        return redirect(route('leases.index'));
    }

    /**
     * Display the specified Lease.
     */
    public function show($id)
    {
        $lease = $this->leaseRepository->find($id);

        if (empty($lease)) {
            Flash::error('Lease not found');

            return redirect(route('leases.index'));
        }

        return view('leases.show')->with('lease', $lease);
    }

    /**
     * Show the form for editing the specified Lease.
     */
    public function edit($id)
    {
        $lease = $this->leaseRepository->find($id);

        if (empty($lease)) {
            Flash::error('Lease not found');

            return redirect(route('leases.index'));
        }

        return view('leases.edit')->with('lease', $lease);
    }

    /**
     * Update the specified Lease in storage.
     */
    public function update($id, UpdateLeaseRequest $request)
    {
        $lease = $this->leaseRepository->find($id);

        if (empty($lease)) {
            Flash::error('Lease not found');

            return redirect(route('leases.index'));
        }

        $lease = $this->leaseRepository->update($request->all(), $id);

        Flash::success('Lease updated successfully.');

        return redirect(route('leases.index'));
    }

    /**
     * Remove the specified Lease from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lease = $this->leaseRepository->find($id);

        if (empty($lease)) {
            Flash::error('Lease not found');

            return redirect(route('leases.index'));
        }

        $this->leaseRepository->delete($id);

        Flash::success('Lease deleted successfully.');

        return redirect(route('leases.index'));
    }
}
